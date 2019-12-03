<?php



require_once('funciones/autoload.php');



$email='';
$password = '';
$apellido = '';
$nombre='';
$repassword = '';
$cumple = '';
$pais = '';
$acepto = '';
$archivo = '';
$nombreArchivo = 'avatar@avatar.com.jpg';

$error = [];
$error['email'] = '';
$error['password'] = '';
$error['nombre'] = '';
$error['apellido'] = '';
$error['repassword'] = '';
$error['cumple'] = '';
$error['pais'] = '';
$error['acepto'] = '';
$error['archivo'] = '';


if ($_POST){
  $nombre=trim($_POST['nombre']);
  $apellido = $_POST['apellido'];
  $email=trim($_POST['email']);
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $cumple = $_POST['cumple'];
  $archivo = $_FILES['avatar'];
  $pais = $_POST['pais'];
  $acepto = empty($_POST['acepto']) ? false : true;


  $validador = new ValidadorRegistro;
  $error = $validador->validarRegistro( $nombre, $apellido,  $email,  $password,  $repassword, $cumple,  $pais,  $archivo, $acepto);

  if (empty($error))
  {

    $nombreArchivo = subirAvatar($_FILES['avatar'], $email);

    $usuario = [
        'nombre' => $nombre,
        'apellido' => $apellido,
        'avatar' => $nombreArchivo,
        'email' => $email,
        'contrasena' => password_hash($password, PASSWORD_DEFAULT),
        'cumple' => $cumple,
        'pais' => $pais,
        'avatar' => $nombreArchivo,
    ];

    if (!file_exists('database')) {
      mkdir('database');
    }

    $archivo = file_get_contents('database/usuarios.json');
    $usuarios = json_decode($archivo, true);
    $usuarios[] = $usuario;

    $usuariosJson = json_encode($usuarios);

    file_put_contents('database/usuarios.json', $usuariosJson);

    $_SESSION['email'] = $usuario['email'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['apellido'] = $usuario['apellido'];
    $_SESSION['pais'] = $usuario['pais'];
    $_SESSION['cumple'] = $usuario['cumple'];
    $_SESSION['avatar'] = $usuario['avatar'];

    header('Location:perfil.php');
  }
}





?>

<link rel="stylesheet" href="css/estilosformulario.css">



@extends('layout')

@section('main')



<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">REGISTRATE</h4>
      <h5> ¡Comenzá a formar parte de esta comunidad!</h5>


<form action="registrarse.php" method="post" target="" enctype="multipart/form-data">
<div class="form-row">
<div class="col-md-4 mb-3">
  <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $nombre ?>">
    <p style="color:red; margin-top:5px;">  <?= $error['nombre'] ?? ''?></p>
</div>
<div class="col-md-4 mb-3">
  <input type="text" class="form-control" placeholder="Apellido" name="apellido" value="<?php echo $apellido ?>">
  <p style="color:red;">  <?= $error['apellido'] ?? ''?></p>
</div>

<div class="col-md-4 mb-3">
  <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email ?>">
    <p style="color:red; margin-top:5px;">  <?= $error['email'] ?? ''?></p>
</div>

<div class="col-md-4 mb-3">
  <input type="password" class="form-control mb-2" placeholder="Contraseña" name="password" value="<?php echo $password ?>">
  <p style="color:red; margin-top:5px;">  <?= $error['password'] ?? ''?></p>
</div>

<div class="col-md-4 mb-3">
  <input type="password" class="form-control mb-2" placeholder="Reescribe Contraseña" name="repassword" value="<?php echo $repassword ?>">
  <p style="color:red; margin-top:5px;">  <?= $error['repassword'] ?? ''?></p>
</div>


<div class="col-md-6 mb-3">
  <input type="date" name="cumple" class="form-control" min="1939-01-01" max="2017-12-31" value="<?php echo $cumple ?>">
    <p style="color:red; margin-top:5px;">  <?= $error['cumple'] ?? ''?></p>
</div>


<div class="col-md-4 mb-3">
 <select class="custom-select" name="pais">
   <option value="">País...</option>
   <option value="1" <?php if ($pais == '1'): echo "selected"; endif;?> > Argentina </option>
   <option value="2" <?php if ($pais == '2'): echo "selected"; endif;?> > Canada </option>
   <option value="3" <?php if ($pais == '3'): echo "selected"; endif;?> > Brasil </option>
 </select>
 <p style="color:red; margin-top:5px;">  <?= $error['pais'] ?? ''?></p>
</div>

<div class="col-md-6 mb-3">
  <label for="files" class="btn" id="avatar" name="avatar">Seleccionar imagen</label>
    <input id="files" style="visibility:hidden;" type="file">
  <p style="color:red; margin-top:5px;">  <?= $error['archivo'] ?? ''?></p>
</div>

</div>



<div class="form-group">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="acepto" value="<?php echo $acepto ?>">
  <label class="form-check-label">
    Acepto términos y condiciones.
  </label>
</div>
  <?= $error['acepto'] ?? '' ?>
</div>
<button class="btn btn-primary" type="submit">Registrarme</button>
</form>



    </div>
  </section>
</main>

@endsection
