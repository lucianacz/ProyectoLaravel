<link rel="stylesheet" href="css/viajes.scss">

@extends('layout')
@section('main')

<main>
<section>

<div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('img/slider1.jpg');">

    <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Headline</h1>

</div>

<div class="col-lg-12 col-md-12 col-12 frasePrincipal">
      <p class="col-lg-8 col-md-12 col-12" style="text-align: center;font-size:0.87em; width:100%; margin: 0 auto;"> <strong style="color: white;">BIENVENID@ A LA COMUNIDAD VIAJERA</strong></p>
</div>

<section class="identidad">
<div class="uk-animation-toggle" tabindex="0">
        <img class="uk-animation-stroke uk-animation-reverse" width="400" height="400" src="img/mursi.svg" alt="" uk-svg="stroke-animation: true">
    </div>
</section>




<section class="identidad" style="margin-top:20px;">
  <div class="col-lg-4 col-md-6 col-10" id="identidad">
    <h4 style="color:grey;">¿QUE ES SARIRI?</h4>
    <p>Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos. Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.</p>
      <a href="/quienessomos">VER MÁS</a>

  </div>
</section>


</main>


@endsection




<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
