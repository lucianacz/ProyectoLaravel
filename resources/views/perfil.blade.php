<?php

	require('funciones/autoload.php');


		if (Autenticador::estaElUsuarioLogeado())
		{
			$archivo = file_get_contents('database/usuarios.json');
			$usuarios = json_decode($archivo, true);

				foreach ($usuarios as $usuario) {
						if ($usuario['email'] == $_SESSION['email']) {
								//aqui es donde encontré al usuario y lo logeo

								$_SESSION['email'] = $usuario['email'];
								$_SESSION['nombre'] = $usuario['nombre'];
								$_SESSION['apellido'] = $usuario['apellido'];
								$_SESSION['pais'] = $usuario['pais']??'';
								$_SESSION['cumple'] = $usuario['cumple']??'';
								$_SESSION['avatar'] = $usuario['avatar']??'avatar@avatar.com.jpg';
								break;
						}
				}
				if (empty($_SESSION['email'])) {
					session_destroy();
					setcookie('recuerdame', '', time()-1);
				}

	}else{
		header('location:login.php');
	}


 ?>


 <link rel="stylesheet" href="css/estilosperfil.css">


 @extends('layout')

 @section('main')


<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10 datos">
      <h4 style="color:grey;">BIENVENIDX </h4>
      <h5> <?php echo $_SESSION['email']; ?> </h5>
			<img src="avatars/<?php echo $_SESSION['avatar']; ?>" alt="">
  </section>

	<?php var_dump($_SESSION); ?>

	<div class="culturas datos col-lg-6 col-md-6 col-10">
		<p> Nombre: <?php echo $_SESSION['nombre']; ?> </p>
		<p> Apellido: <?php echo $_SESSION['apellido']; ?></p>
		<p> Fecha de Cumple: <?php echo $_SESSION['cumple']; ?></p>
		<p> Pais: <?php echo $_SESSION['pais']; ?> </p>
	</section>


</main>


@endsection
