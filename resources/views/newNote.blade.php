

<link rel="stylesheet" href="css/estiloscarga.css">


@extends('layout')

@section('main')



<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">NUEVA NOTA</h4>
      <h5> Si cargas la nota bien evitas errores de programacion</h5>


  <form action="gente" method="post" target="" enctype="multipart/form-data">
  <div class="form-row">
  <div class="col-12">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" placeholder="" name="title">
      <p style="color:red; margin-top:5px;">  <?= $error['title'] ?? ''?></p>
  </div>

  <div class="col-12">
    <label for="subtitle">Subtitulo</label>
    <input type="text" class="form-control" placeholder="" name="subtitle">
    <p style="color:red;">  <?= $error['subtitle'] ?? ''?></p>
  </div>

  <div class="col-6">
    <label for="location">Ubicacion</label>
    <input type="text" class="form-control" placeholder="" name="location">
      <p style="color:red; margin-top:5px;">  <?= $error['location'] ?? ''?></p>
  </div>

  <div class="col-6">
    <label for="location">Provincia</label>
    <input type="text" class="form-control" placeholder="" name="location">
      <p style="color:red; margin-top:5px;">  <?= $error['location'] ?? ''?></p>
  </div>


  <div class="col-12">
    <label for="paragraph">Primer Parrafo</label>
    <textarea type="text" maxlength="5000" rows="8" class="form-control" placeholder="" name="paragraph"></textarea>
    <p style="color:red;">  <?= $error['paragraph'] ?? ''?></p>
  </div>

  <div class="col-12">
    <label for="destacado">Destacado</label>
    <input type="text" class="form-control" placeholder="" name="destacado">
    <p style="color:red;">  <?= $error['destacado'] ?? ''?></p>
  </div>

  <div class="col-12">
    <label for="paragraph">Segundo Parrafo</label>
    <textarea type="text" maxlength="5000" rows="8" class="form-control" placeholder="" name="paragraph"></textarea>
    <p style="color:red;">  <?= $error['paragraph'] ?? ''?></p>
  </div>

  <div class="col-12">
    <label for="destacado">Link de Youtube</label>
    <input type="text" class="form-control" placeholder="" name="youtube">
    <p style="color:red;">  <?= $error['youtube'] ?? ''?></p>
  </div>


  <div class="col-6">
      <label for="visit">Fecha de Visita</label>
  <input type="month" name="year" class="form-control" min="1939-01-01" max="2017-12-31">
      <p style="color:red; margin-top:5px;">  <?= $error['visit'] ?? ''?></p>
  </div>


  <div class="col-6">
    <label for="visit">Imagen</label>
    <input id="files" style="display: null;" type="file">
  </div>


  <div class="col-12">
  <button class="btn col-12" type="submit">Subir nota</button>
  </div>

  </form>
</div>

</section>
</main>

@endsection
