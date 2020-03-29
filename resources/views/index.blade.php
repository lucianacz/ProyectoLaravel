@extends('layout')

@section('main')

<main>
<section>
  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 300; max-height: 700">

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/indexSlider/4.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="img/indexSlider/5.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="img/indexSlider/6.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<section class="identidad">
  <div class="col-lg-4 col-md-6 col-10" id="identidad">
    <h4 style="color:grey;">¿QUE ES SARIRI?</h4>
    <p>Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos. Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.</p>
      <a href="/quienessomos">VER MÁS</a>

  </div>
</section>


  <section class="explora row">

    <div class="plantilla col-lg-9 col-md-8 col-12">
    <a href="newNote"><img src="img/plantilla4.jpg" alt="Camellos"></a>
    </div>
  </section>



<section>
  <div uk-slider="center: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
            @foreach ($notas as $nota)
            <li>
              <a href="{{url('nota/'.$nota->id)}}">
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="/storage/{{$nota->foto}}" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">@ {{$nota->usuario->nombreUsuario}}</h3>
                        <p>{{$nota->subtitulo}}. En: {{$nota->titulo}}, {{$nota->pais}}
                        <br> VER MÁS</p>
                    </div>
                </div>
                </a>
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

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
