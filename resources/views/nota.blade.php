<link rel="stylesheet" href="/css/estilosNota.css">

@extends('layout')

@section('main')




<main>
    <section class="culturas">
      <div class="col-lg-6 col-md-6 col-10">
        <div class="col-12">
          <a href="/gente" class="uk-icon-button  uk-margin-small-right" uk-icon="chevron-double-left"></a>
          @if($ant)
          <a href="/nota/{{$ant->id}}" class="uk-icon-button  uk-margin-small-right" uk-icon="arrow-left"></a>
          @endif
          @if($sig)
          <a href="/nota/{{$sig->id}}" class="uk-icon-button  uk-margin-small-right" uk-icon="arrow-right"></a>
          @endif
        </div>

      </br>
        <h4 style="color:grey;">{{$nota->titulo}}, {{$nota->pais}}</h4>



    <div class="row">

      <article class="nota col-12 principal2">
        <h6 style="font-size:19px;font-weight:lighter;"> {{$nota->subtitulo}} </h6>
        <div id="fotoNota">
        <img src="/storage/{{$nota->foto}}"  alt="Foto">
        </div>

        <div id="cuerpoNotaPrincipal">

          <p>{{askMonth($nota->fecha->format('m'), $nota->fecha->format('y'))}}</p>
          <br>

          <div>
          <p style="white-space: pre-wrap;">{{$nota->parrafo}}</p>
          </div>




        </div>

        <h5 style="font-size:19px;font-weight:lighter;"> Usuario: {{$nota->usuario->nombreUsuario}} </h5>
      </article>


    </div>
    </div>

</main>



<?php

function askMonth (int $m, int $y){
$nombreMes = array(
  '',
  'Enero',
  'Febrero',
  'Marzo',
  'Abril',
  'Mayo',
  'Junio',
  'Julio',
  'Agosto',
  'Septiembre',
  'Octubre',
  'Noviembre',
  'Diciembre',
);

if ($y < 20) {
  return  'Fecha de visita: ' . $nombreMes[$m] . ' del ' . '20'. $y;
} else {
  return  'Fecha de visita: ' . $nombreMes[$m] . ' del ' . '19'. $y;
}

}

 ?>


@endsection
