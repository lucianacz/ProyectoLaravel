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
        <h4 style="color:grey;">{{$nota->region}}, {{$nota->pais}}</h4>



    <div class="row">

      <article class="nota col-12 principal2">
        <h6 style="font-size:19px;font-weight:lighter;"> {{$nota->titulo}} </h6>
        <div id="fotoNota">
        <img src="/storage/{{$nota->foto}}"  alt="Foto">
        </div>

        <div id="cuerpoNotaPrincipal">

          <p>{{askMonth($nota->fecha->format('m'), $nota->fecha->format('y'))}}</p>

          <div>
          <p>{{$nota->parrafo1}}</p>
          </div>

          <div id="destacado">
          <p>{{$nota->destacado}}</p>
          </div>

          <div>
          <p> {{$nota->parrafo2}}</p>
          </div>



        <?php if ($nota->video != null && $nota->video == "youtube.com") :  ?>

          <div class="video col-12">
            <iframe width="560" height="315" src="{{$nota->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

        <?php endif; ?>

        </div>

        <h5 style="font-size:19px;font-weight:lighter;"> {{$nota->usuario->name}} {{$nota->usuario->apellido}}, {{$nota->usuario->pais}} </h5>
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
