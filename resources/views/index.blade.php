<?php session_start();




 ?>

 <link rel="stylesheet" href="/css/estilos.css">




@extends('layout')

@section('main')

<main>
  <div class="principal">
      <div class="scroller">
        <a href="#culturas">
        <i class="fas fa-arrow-circle-down"></i>
        </a>
      </div>
  </div>



    <section class="identidad">
      <div class="col-lg-4 col-md-6 col-10" id="identidad">
        <h4 style="color:grey;">¿QUE ES SARIRI?</h4>
        <p>Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos. Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.</p>
          <a href="#">VER MÁS</a>

      </div>
    </section>


  <section class="explora row">

    <div class="plantilla col-lg-9 col-md-8 col-12">
    <a href="#"><img src="img/plantilla2.jpg" alt="Camellos"></a>



    </div>



  </section>



  <section id = "culturas" class="culturas">
    <div class="col-lg-8 col-md-8 col-10">
      <h4 style="color:grey;">GENTE Y CULTURAS</h4>

      <div class="menuculturas uk-margin-medium-top">
      <ul class="uk-flex-center" uk-tab uk-switcher>

            @foreach ($notas as $nota)
              @if ($nota->id < 4)
              <li class="uk-active" style="text-transform: uppercase;"><a href="#">{{$nota->region}}</a>
              </li>
              @endif
              @endforeach

            <li>
                <a href="#">Más <span class="uk-margin-small-left" uk-icon="icon: triangle-down"></span></a>
                <div uk-dropdown="mode: click">
                    <ul class="uk-nav uk-dropdown-nav">
                      @foreach ($notas as $nota)
                      @if ($nota->id > 4)
                        <li class="uk-active"><a href="#">{{$nota->region}}</a></li>
                      @endif
                      @endforeach
                        <li class="uk-active"><a href="gente">TODAS</a></li>
                    </ul>

                </div>
            </li>
        </ul>
        <ul class="uk-switcher">

          @foreach ($notas as $nota)
          <li>
            <div class="col-lg-6 col-md-3 col-12 foto">
            <img src="img/{{$nota->foto}}"  alt="FotoPais">
            </div>

            <div class="cuerpo col-lg-6 col-md-3 col-10">
            <p>{{$nota->parrafo1}}</p>
            <a href="#">VER MÁS</a>
            </div>
          </li>
          @endforeach
        </ul>
      </div>

    </div>
  </section>

</main>


@endsection





<!-- UIkit CSS -->


<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.3/dist/js/uikit-icons.min.js"></script>
