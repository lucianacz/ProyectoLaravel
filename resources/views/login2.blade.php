

@extends('layout')

@section('main')


<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-8 col-10">
      <h4 style="color:grey;">INICIA SESION</h4>
      <h5> ¡No te pierdas ninguna novedad!</h5>




<form action="login.php" method="post" target="">

<div class="form-row align-items-center col-lg-8 col-md-8">
  <div class="form col-10">
    <div class="input-group mb-2">
      <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $email ?>">
    </div>
    <p style="color:red; margin-top:5px;">  <?= $error['email'] ?? ''?></p>
  </div>

  <div class="form col-10">
    <input type="password" class="form-control mb-2" id="inlineFormInput" placeholder="Contraseña" name="password" value="<?php echo $password ?>">
    <p style="color:red; margin-top:5px;">  <?= $error['password'] ?? ''?></p>
  </div>


  <div class="form col-10">
    <div class="form-check mb-2" style="text-align:left;">
      <input class="form-check-input" type="checkbox" id="" name="recuerdame">
      <label class="form-check-label" for="autoSizingCheck">
        Recordarme
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary mb-2">Enviar</button>
  </div>
    <?= $error['match'] ?? ''
    //var_dump($errores); ?>
</div>





</form>

      </div>
    </div>
  </section>
</main>

@endsection
