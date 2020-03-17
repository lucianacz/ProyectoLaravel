@extends('layout')

@section('main')

<main>

<div class="row">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sliderIndex/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sliderIndex/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/sliderIndex/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



    <section class="identidad">
      <div class="col-lg-4 col-md-6 col-10" id="identidad">
        <h4 style="color:grey; margin-top:30px;">¿QUE ES SARIRI?</h4>
        <p>Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos. Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.</p>
          <a href="/quienessomos">VER MÁS</a>

      </div>
    </section>


  <section class="explora row">

    <div class="plantilla col-lg-9 col-md-8 col-12">
    <a href="newNote"><img src="img/plantilla2.jpg" alt="Camellos"></a>



    </div>



  </section>



  <section id = "culturas" class="culturas">
    <div class="col-lg-8 col-md-8 col-10">
      <h4 style="color:grey;"> <a href="/gente" style="color:grey; font-weight:500;">GENTE Y CULTURAS</a></h4>


      <div class="menuculturas uk-margin-medium-top">

      <ul class="uk-flex-center" uk-tab uk-switcher>

        @foreach ($notas as $nota)
        <li class="uk-active" style="text-transform: uppercase;"><a href="#">{{$nota->pais}}</a></li>
        @endforeach
        </ul>


        <ul class="uk-switcher">

          @foreach ($notas as $nota)
          <li>
            <div class="col-lg-6 col-md-3 col-12 foto">
            <img src="/storage/{{$nota->foto}}"  alt="FotoPais">
            </div>

            <div class="cuerpo col-lg-6 col-md-5 col-xs-6">
            <a href="{{url('nota/'.$nota->id)}}" style="margin:5px; text-transform: uppercase;"> {{$nota->subtitulo}} </a>
            <a href="{{url('nota/'.$nota->id)}}" style="margin:5px;"> En: {{$nota->titulo}}, {{$nota->pais}}</a>
            <a href="{{url('nota/'.$nota->id)}}" style="margin:5px;"> Por: <strong>{{$nota->usuario->nombreUsuario}}</strong> </a>
            <a href="{{url('nota/'.$nota->id)}}" style="font-size:15px;">VER MÁS</a>
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
