@extends('layout')

@section('main')

<main>
<section>

<div class="principal">
</div>

<div class="col-lg-12 col-md-12 col-12 frasePrincipal">
      <p class="col-lg-8 col-md-12 col-12" style="text-align: center;font-size:0.87em; width:100%; margin: 0 auto;"> <strong style="color: white;">¡BIENVENIDX A LA COMUNIDAD VIAJERA!</strong></p>
</div>

<section class="identidad">
  <div class="col-lg-4 col-md-6 col-10" id="identidad">
    <h4 style="color:grey;">¿QUE ES SARIRI?</h4>
    <p>Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos. Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.</p>
      <a href="/quienessomos">VER MÁS</a>

  </div>
</section>




<section>

  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
        <li>
            <div class="uk-panel">
                <img src="images/slider1.jpg" alt="">
                <div class="uk-position-center uk-panel"><h1>1</h1></div>
            </div>
        </li>
        <li>
            <div class="uk-panel">
                <img src="images/slider2.jpg" alt="">
                <div class="uk-position-center uk-panel"><h1>2</h1></div>
            </div>
        </li>
        <li>
            <div class="uk-panel">
                <img src="images/slider3.jpg" alt="">
                <div class="uk-position-center uk-panel"><h1>3</h1></div>
            </div>
        </li>
        <li>
            <div class="uk-panel">
                <img src="images/slider4.jpg" alt="">
                <div class="uk-position-center uk-panel"><h1>4</h1></div>
            </div>
        </li>
        <li>
              @foreach ($notas as $nota)
            <div class="uk-panel">
                <img style="object-fit: cover;" src="/storage/{{$nota->foto}}" alt="">
                <div class="uk-position-center uk-panel">
                  <h2>{{$nota->subtitulo}}</h2>
                </div>
            </div>
              @endforeach
        </li>

    </ul>


    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>



</section>


<section class="explora row">

  <div class="plantilla col-lg-9 col-md-8 col-12">
  <a href="newNote"><img src="img/plantilla4.jpg" alt="Camellos"></a>
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
