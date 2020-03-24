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
          <a href="/newNote" class="uk-icon-button  uk-margin-small-right" uk-icon="plus"></a>
        </div>

      </br>
        <h4 style="color:grey;">{{$nota->titulo}}, {{$nota->pais}}</h4>



    <div class="row">

      <article class="nota col-12 principal2">
        <h6 style="font-size:19px;font-weight:lighter; text-transform: uppercase;"> {{$nota->subtitulo}} </h6>
          <div id="fotoNota">
          <img src="/storage/{{$nota->foto}}"  alt="Foto">
          </div>
          <div id="cuerpoNotaPrincipal">
          <p style="white-space: pre-wrap; justify-content: center;">{{$nota->parrafo}}</p>
          </div>

          <?php if ($nota->foto2) :?>
          <div id="fotoNota">
          <img src="/storage/{{$nota->foto2}}"  alt="Foto">
          </div>
          <?php endif; ?>

          <?php if ($nota->parrafo2) :?>
          <div id="cuerpoNotaPrincipal">
          <p style="white-space: pre-wrap; justify-content: center;">{{$nota->parrafo2}}</p>
          </div>
          <?php endif; ?>


          <?php if ($nota->foto3) :?>
          <div id="fotoNota">
          <img src="/storage/{{$nota->foto3}}"  alt="Foto">
          </div>
          <?php endif; ?>

          <?php if ($nota->parrafo3) :?>
          <div id="cuerpoNotaPrincipal">
          <p style="white-space: pre-wrap; justify-content: center;">{{$nota->parrafo3}}</p>
          </div>
          <?php endif; ?>


        <h5 style="font-size:19px;font-weight:lighter;"> Usuario: {{$nota->usuario->nombreUsuario}} </h5>
        <h5 style="font-size:15px;font-weight:lighter;"> {{askMonth($nota->fecha->format('m'), $nota->fecha->format('y'))}} </h5>




        <li class="social__item">
        <div id="mImageBox">
        <button id="my_image" alt=''  src="/storage/{{$nota->foto}}" class="social__link" onclick="fbs_click(this)">COMPARTIR FB!!</button>
        </div>
        <script>
        function fbs_click(TheImg) {

            u=TheImg.src;

            t=TheImg.getAttribute('alt');

            window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL));

            return false;

           }
         </script>
         </li>


        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v6.0&appId=734076347092155&autoLogAppEvents=1"></script>
        <div class="fb-share-button" data-href="http://culturasariri.com.ar/{{url('nota/'.$nota->id)}}"" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>

        <ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&quote=" title="Comparte en Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"><meta property="og:image" content="culturasariri.con.ar/storage/{{$nota->foto}}"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter"></a></li>
  <li><a href="https://plus.google.com/share?url=" target="_blank" title="Comparte on Google+" onclick="window.open('https://plus.google.com/share?url=' + encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="google"></a></li>
  <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Envialo por email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="mail"></a></li>
</ul>
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
