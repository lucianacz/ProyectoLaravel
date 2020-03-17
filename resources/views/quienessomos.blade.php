


@extends('layout')

@section('main')

<link rel="stylesheet" href="/css/estilosquienes.css">


<main>
  <section class="qSomos">

      <div class="col-lg-8 col-md-10 col-10">
        <h4 style="color:grey;">¿QUIENES SOMOS?</h4>

          <p style="white-space: pre-wrap; justify-content: center;">
          Somos Julian y Luciana.
          En 2018 decidimos salir a viajar por el mundo y en los meses de nuestra aventura recorrimos muchos países de Asia, algunos de África y otros de Europa. Ya habíamos tenido la posibilidad de viajar previamente por algunos lugares de América.
          En nuestros viajes vivimos un montón experiencias. Sin dudas las que más nos marcaron fueron las vivencias en las que pudimos generar una interacción real con las diferentes culturas. Cuando viajamos intentamos salirnos del circuito turístico y buscar la autenticidad de los lugares. De esta forma conocimos étnias, tribus y distintas sociedades. Nos entregamos a ser parte de diferentes formas de vida.
          Fue al final de nuestro viaje cuando nos dimos cuenta que el turismo convencional no logra generar esta interacción con las culturas locales y muchas veces termina perjudicandolas. Es aquí donde nace Cultura Sariri.
          </p>
        </div>


        <div class="col-lg-8 col-md-10 col-10">
          <h4 style="color:grey; margin-top:30px;">¿QUE SIGNIFICA SARIRI?</h4>
            <p style="white-space: pre-wrap; justify-content: center;">
              Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos.
              Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de generación en generación.
              Viaja a través del tiempo y el espacio, trasciende las culturas, es el encargado de mantener viva la memoria que cada pueblo guarda en sus habitantes. </p>
          </div>


  </section>


  <section>


    <div class="col-lg-12 col-md-12 col-12 frase">
          <h2>NUESTRO PROPÓSITO</h2>
          <h3 class="col-lg-8 col-md-12 col-12">Fomentar una interaccion cultural, consciente genuina y
        enriquecedora para todas las partes implicadas.</h3>
    </div>

  </section>


  <section>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <li>
            <img src="img/slider/s1.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s2.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s3.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s4.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s5.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s6.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s7.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
        <li>
            <img src="img/slider/s8.jpg" alt="">
            <div class="uk-position-center uk-panel"></div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-button" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color:white; border-radius:20px; opacity:0.4;"></a>

    <a class="uk-position-center-right uk-position-small uk-button" href="#" uk-slidenav-next uk-slider-item="next" style="background-color:white; border-radius:20px; opacity:0.4;"></a>

</div>
  </section>

</main>

@endsection

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
