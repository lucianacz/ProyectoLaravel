


@extends('layout')

@section('main')

<link rel="stylesheet" href="/css/estilosquienes.css">


<main>
  <section class="qSomos">
    <div class="col-lg-8 col-md-10 col-10">
      <h4 style="color:grey; margin-top:50px;">¿QUE SIGNIFICA SARIRI?</h4>
        <p>
        Sariri en lengua Aymara significa viajero, es quien lleva mensajes entre los pueblos andinos.
        Nosotros vemos al “Sariri” como un transmisor, como la fuerza que mantiene la tradición viva de
        generación en generación.</p>
        <p>
        Viaja a través del tiempo y el espacio, trasciende las culturas, es el
        encargado de mantener viva la memoria que cada pueblo guarda en sus habitantes.
        Cultura Sariri es un proyecto muy joven, de apenas tres meses.</p>
      </div>



      <div class="col-lg-8 col-md-10 col-10">
        <h4 style="color:grey;">¿QUIENES SOMOS?</h4>

          <p class="text"> ¡Hola! Somos Julian y Luciana. </p>

          <p> Hace un año decidimos salir a viajar por el mundo y en los meses de nuestra aventura recorrimos muchos países de Asia, algunos de África y otros de Europa. Y ya habíamos tenido la posibilidad de viajar previamente por algunos lugares de América Latina. </p>

          <p> En nuestro viaje vivimos un montón experiencias, pero de lo que más nos llamó la atención es la interacción con las diferentes culturas y las realidades paralelas que vivimos. Salimos del circuito turístico y fuimos en busca de lo poco frecuentado. Interactuar con la gente y sentirte parte de las diferentes culturas, no tiene precio. Conocimos así étnias, tribus y distintas sociedades. Nos entregamos a ser parte de diferentes formas de vida. No siempre es necesario el mismo idioma para comunicarnos, a veces son los códigos gestuales como una sonrisa, unirse a una ceremonia o tan simple como probar la comida local.</p>

          <p> Nos dimos cuenta, que el turismo convencional no tiene esta interacción con el mundo local, y es por eso, en base a nuestras vivencias, decidimos lanzar este nuevo proyecto.</p>

          <p> Desde nuestro espacio divulgamos experiencias por el mundo retratando; ceremonias, vivencias, paisajes, entre otras
          experiencias.</p>

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

    <a class="uk-margin-small-right uk-icon-button" href="#" uk-slidenav-previous uk-slider-item="previous"></a>

    <a class="uk-margin-small-right uk-icon-button" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
  </section>

</main>

@endsection

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
