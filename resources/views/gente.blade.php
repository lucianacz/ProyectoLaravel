<link rel="stylesheet" href="css/estilosgente.css">

<?php

//$query= mysql_db_query("$db","SELECT usuarios.Nombre, usuarios.pais FROM usuarios, notas WHERE usuarios.id = notas.idUsuario");

 ?>

@extends('layout')

@section('main')


<main>
  <section class="gente">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">GENTE Y CULTURAS</h4>
      <?php /* <form class="uk-search uk-search-default">
      <span uk-search-icon></span>
      <input class="uk-search-input" type="search" placeholder="Buscar...">
    </form>*/ ?>

    <h5> SUBI TU NOTA</h5>
    <a href="/newNote" class="uk-icon-button  uk-margin-small-right" uk-icon="plus"></a>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; min-height: 300; max-height: 400">
      <BR>

    <div class="row">
      @foreach ($notas as $nota)
      <article class="nota col-lg-3 col-md-4 col-11">
        <div class="fotoSameSize" style="width:100%; height:24vh;">
        <a href="{{url('nota/'.$nota->id)}}"> <img style="width:100%; height:23vh;" src="/storage/{{$nota->foto}}" alt="{{$nota->pais}}"></a>
        </div>



        <div class="cuerpoNota">
          <a href="{{url('nota/'.$nota->id)}}" style="text-transform: uppercase; text-align:center; font-weight:bold; color: black;"> {{$nota->subtitulo}} - <strong>{{$nota->pais}}</strong></p></a>
          <p class="muestraUsuario" style="text-transform: uppercase; text-align:center; color: grey;"> @ {{$nota->usuario->nombreUsuario}} </p>
        </div>
      </article>
      @endforeach
    </div>
    </div>
  </section>
  <br>
  <section>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <li>
            <img src="img/slider/s1.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s2.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s3.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s4.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s5.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s6.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s7.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s8.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-button" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color:white; border-radius:20px; opacity:0.4;"></a>

    <a class="uk-position-center-right uk-position-small uk-button" href="#" uk-slidenav-next uk-slider-item="next" style="background-color:white; border-radius:20px; opacity:0.4;"></a>

</div>
  </section>




</main>

@endsection
