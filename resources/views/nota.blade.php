<link rel="stylesheet" href="/css/estilosNota.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


@extends('layout')

@section('main')

  <meta property="og:url"           content="https://www.culturasariri.com.ar/nota/{{$nota->id}}.html" />
  <meta property="og:type"          content="Blog Notas" />
  <meta property="og:title"         content="Cultura Sariri" />
  <meta property="og:description"   content="Blog" />
  <meta property="og:image"         content="https://www.culturasariri.com.ar/storage/{{$nota->foto}}" />


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
          @guest
          @else
            <?php if ($nota->usuario->id == $logeado->id || $logeado->adm == 1) :  ?>
          <a href="/edit/nota/{{$nota->id}}" class="uk-icon-button  uk-margin-small-right" uk-icon="pencil"></a>

          <?php endif; ?>
          @endguest

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
          <p style="justify-content: flex-start; white-space: pre-wrap;">{{$nota->parrafo}}</p>
          </div>

          <?php if ($nota->foto2) :?>
          <div id="fotoNota">
          <img src="/storage/{{$nota->foto2}}"  alt="Foto">
          </div>
          <?php endif; ?>

          <?php if ($nota->parrafo2) :?>
          <div id="cuerpoNotaPrincipal">
          <p style="justify-content: flex-start; white-space: pre-wrap;">{{$nota->parrafo2}}</p>
          </div>
          <?php endif; ?>


          <?php if ($nota->foto3) :?>
          <div id="fotoNota">
          <img src="/storage/{{$nota->foto3}}"  alt="Foto">
          </div>
          <?php endif; ?>

          <?php if ($nota->parrafo3) :?>
          <div id="cuerpoNotaPrincipal">
          <p style="justify-content: flex-start; white-space: pre-wrap;">{{$nota->parrafo3}}</p>
          </div>
          <?php endif; ?>


        <h5 style="font-size:19px;font-weight:lighter;"> Usuario: {{$nota->usuario->nombreUsuario}} </h5>
        <h5 style="font-size:15px;font-weight:lighter;"> {{askMonth($nota->fecha->format('m'), $nota->fecha->format('y'))}} </h5>



        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Your share button code -->
        <div class="fb-share-button"
          data-href="https://www.culturasariri.com.ar/nota/{{$nota->id}}"
          data-layout="button_count">
        </div>

  <ul class="share-buttons">
  ¡Comparte!
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&quote=" title="Comparte en Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"><meta property="og:image" content="http://culturasariri.com.ar/nota/{{$nota->id}}"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20'  + encodeURIComponent(document.URL)); return false;" class="uk-icon-button  uk-margin-small-right" uk-icon="twitter"></a></li>
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

<script type="text/javascript">

function confirmDelete(event,tag,idNota){
  swal({
  title: "Estas seguro?",
  text: "Una vez borrada no podrás recuperarla!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("La nota fue borrada exitosamente", {
      icon: "success",
    });

    document.querySelector('#deleteForm'+idNota).submit();
  } else {
    swal("La nota sigue online :)");
    event.preventDefault();
  }
});
}

</script>

@endsection
