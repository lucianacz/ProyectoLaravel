@extends('layout')

@section('main')

<main>
<section>
  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

    <ul class="uk-slideshow-items">
        <li>
            <img src="img/indexSlider/1.JPG" alt="" uk-cover>
        </li>
        <li>
            <img src="img/indexSlider/2.JPG" alt="" uk-cover>
        </li>
        <li>
            <img src="img/indexSlider/3.JPG" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-slidenav-large uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-slidenav-large uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>



<section id = "culturas" class="culturas">
  <div class="col-10">
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



<section>

  <div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
      <div class="vc_column-inner">
        <div class="wpb_wrapper">
          <h3 style="font-size: 28px;color: #cdcdcd;text-align: left;font-family:Muli;font-weight:300;font-style:normal" class="vc_custom_heading vc_custom_1550073812085">
          Últimos artículos de nuestro BLOG</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="vc_row wpb_row vc_row-fluid vc_column-gap-15 vc_row-o-equal-height vc_row-flex">
    <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
      <div class="vc_column-inner vc_custom_1550074385293">
        <div class="wpb_wrapper">
          <h2 style="font-size: 24px;color: #ffffff;line-height: 1,5;text-align: left;font-weight:400;font-style:normal" class="vc_custom_heading vc_custom_1550602161501">
            <a href=#>
              Petra, la ciudad de piedra</a>
            </h2>
            <h2 style="font-size: 16px;color: #ffffff;line-height: 1.5;text-align: left;font-weight:300;font-style:normal" class="vc_custom_heading vc_custom_1550075442675" >Visitar Petra es adentrarse en un mundo mágico</h2><div class="vc_btn3-container vc_btn3-inline vc_custom_1550073725413">
              <a class="vc_general vc_btn3 vc_btn3-size-sm vc_btn3-shape-square vc_btn3-style-outline vc_btn3-color-grey" href=# title="">LEER
              </a>
            </div>
          </div>
        </div>
      </div>
      </div>

</section>



  <section class="explora row">

    <div class="plantilla col-lg-9 col-md-8 col-12">
    <a href="newNote"><img src="img/plantilla2.jpg" alt="Camellos"></a>
    </div>
  </section>

  <section class="identidad">
    <div class="col-lg-4 col-md-6 col-10" id="identidad">
      <h4 style="color:grey; margin-top:30px;">¿QUE ES SARIRI?</h4>
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
