<link rel="stylesheet" href="css/estilosgente.css">

<?php

//$query= mysql_db_query("$db","SELECT usuarios.Nombre, usuarios.pais FROM usuarios, notas WHERE usuarios.id = notas.idUsuario");

 ?>

@extends('layout')

@section('main')


<main>
  <section class="gente">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">CRONICAS VIAJERAS</h4>
      <h5> SUBI TU NOTA</h5>
      <a href="/newNote" class="uk-icon-button  uk-margin-small-right" uk-icon="plus"></a>
      <?php /* <form class="uk-search uk-search-default">
      <span uk-search-icon></span>
      <input class="uk-search-input" type="search" placeholder="Buscar...">
    </form>*/ ?>
    <section class="identidad">
      <div class="col-lg-6 col-md-8 col-10" id="identidad">
        <p>Queremos darles la bienvenida a este nuevo espacio; Creado con la intención de formar una comunidad de viajerxs, en la cual entre todxs podamos compartir experiencias y sabiduría. En esta era de sobreinformación no hay nada mejor que leer relatos de viajeros reales. ¿te sumas?</p>
          <a href="/quienessomos">VER MÁS</a>

      </div>
    </section>




<?php
/*<div style="text-align:center; margin: 0 auto;" class="col-lg-3 col-md-4 col-11">
  <form style="text-align:center;" method="post" target="" enctype="multipart/form-data">
    @csrf

    <div class="uk-margin">
       <div class="uk-form-controls">
           <select onchange="somefunction($(this).val())" class="uk-select" id="form-horizontal-select">
               <option value="3">Sin filtros</option>
               <option value="1">Cultura Sariri</option>
               <option value="2">Comunidad Viajera</option>
           </select>
       </div>
   </div>
 </form>
</div>*/
 ?>


<script>
  function somefunction(value){
     if(value == 1){
   $("body").css("background-color","red");
     }
     if(value == 2){
       $("body").css("background-color","yellow");
     }
     if(value == 3){
       $("body").css("background-color","white");
     }
  }
   </script>

    <div class="row" id="demo">
      @foreach ($notas as $nota)
      <article class="nota col-lg-3 col-md-4 col-11">
        <div class="fotoSameSize" style="width:100%; height:25vh;">
        <a href="{{url('nota/'.$nota->id)}}"> <img style="width:100%; height:24vh; object-fit: cover;" src="/storage/{{$nota->foto}}" alt="{{$nota->pais}}"></a>
        </div>



        <div class="cuerpoNota">
          <p><a href="{{url('nota/'.$nota->id)}}" style="text-transform: uppercase; text-align:center; font-weight:bold; color: black;"> {{$nota->subtitulo}} - <strong>{{$nota->pais}}</strong></a>
            <br>
          <span class="muestraUsuario" style="text-transform: uppercase; text-align:center; font-weight: lighter; color: grey;"> @ {{$nota->usuario->nombreUsuario}}</span> </p>
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
