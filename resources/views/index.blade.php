@extends('layout')

@section('main')

<main>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <section class="slider-menu">
    <!--Image slider & aside of the menu buttons-->
    <aside class="side-menu">
      <a href="#" data-target="#myCarousel" data-slide-to="0"><img src="http://via.placeholder.com/50x50" alt="">Book</a>
      <a href="#" data-target="#myCarousel" data-slide-to="1"><img src="http://via.placeholder.com/50x50" alt="">Portfolio</a>
      <a href="#" data-target="#myCarousel" data-slide-to="2"><img src="http://via.placeholder.com/50x50" alt="">What to expect</a>
      <a href="#" data-target="#myCarousel" data-slide-to="3"><img src="http://via.placeholder.com/50x50" alt="">Services</a>
    </aside>

    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">
        <div class="item">
          <img src="/img/indexSlider/2.jpg" alt="First Slide">
          <div class="carousel-caption">
            <h3>Second slide label</h3>
            <p>Aliquam sit amet gravida nibh, facilisis...</p>
          </div>
        </div>
        <div class="item">
          <img src="/img/indexSlider/3.jpg" alt="First Slide">
          <div class="carousel-caption">
            <h3>Third slide label</h3>
            <p>Praesent commodo cursus magna vel...</p>
          </div>
        </div>
        <div class="item">
          <img src="/img/indexSlider/1.jpg" alt="First Slide">
          <div class="carousel-caption">
            <h3>Fourth slide label</h3>
            <p>Praesent commodo cursus magna vel...</p>
          </div>
        </div>
      </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
</section>




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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
