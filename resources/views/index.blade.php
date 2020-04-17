@extends('layout')

@section('main')

<main>
<section>

<div class="principal">
</div>

<div class="col-lg-12 col-md-12 col-12 frasePrincipal">
      <p class="col-lg-8 col-md-12 col-12" style="text-align: center;font-size:0.87em; width:100%; margin: 0 auto;"> <strong style="color: white;">VIAJAR NOS TRANSFORMA</strong></p>
</div>

<section class="identidad">
  <div class="col-lg-4 col-md-6 col-11" id="identidad">
    <p>El viaje nos incomoda, nos desafía e interpela sacándonos de nuestra “zona de confort” para llevarnos a un estado tanto físico como mental elevado. </p>
      <a href="/quienessomos">VER MÁS</a>

  </div>
</section>





<section style="margin-top: 50px" class="col-12">
  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@m uk-child-width-1-5@l uk-child-width-1-6@xl">
      @foreach ($notas as $nota)
        <li style="margin-right: 1%;">
          <a href="{{url('nota/'.$nota->id)}}">
            <div class="uk-panel" style="width:100%;">
                <img style="height: 50vh; width: 100%; object-fit: cover;" src="/storage/{{$nota->foto}}" alt="">
                <div class="uk-position-center uk-panel">
                  <h2>{{$nota->pais}}</h2>
                </div>
            </div>
              <div class="uk-card uk-card-body card cardPais" style="text-align: center;">
                <p style="text-transform: uppercase; text-align:center; font-size: 14px; font-weight: bold; color: black;"> {{$nota->subtitulo}}
                  <br>
                <span class="muestraUsuario" style="text-transform: uppercase; text-align:center; font-size: 14px;color: grey; font-weight: lighter; "> @ {{$nota->usuario->nombreUsuario}} </span></p>
              </div>
              </a>
        </li>

        @endforeach


    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color:white; border-radius:20px; opacity:0.4;"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next" style="background-color:white; border-radius:20px; opacity:0.4;"></a>

</div>



</section>


<section class="identidad">
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
