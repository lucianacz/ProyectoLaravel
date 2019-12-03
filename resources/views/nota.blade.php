
@extends('layout')

@section('main')


<main>
  <section class="culturas">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">GENTE Y CULTURAS</h4>

    <div class="row">

      <article class="nota col-lg-12 col-md-12 col-11 principal2">

        <h6 style="font-weight:bold;">{{$nota->Titulo}} </h7>
        <h6 style="font-size:19px;font-weight:lighter;"> {{$nota->Region}}, {{$nota->pais}} </h6>
        <div class="fotoNota">
        <img src="img/{{$nota->Foto}}" alt="img/{{$nota->Epigrafe}}">
        </div>

        <div class="cuerpoNotaPrincipal">
          <p>{{$nota->Parrafo1}}</p>
          <div class="destacado"> <p>{{$nota->Destacado}}</p></div>

          <p> {{$nota->Parrafo2}}</p>
        </div>

        <div class="video col-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MA8-Ld8zYkk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </article>


  <div class="masNotas">

    <h6>OTRAS NOTAS</h6>
    <div class="row">


      <article class="nota col-lg-6 col-md-6 col-6">
        <div class="fotoNota">
        <img src="img/cultura6.jpg" alt="Monito">
        </div>

        <div class="cuerpoNota">
          <a href="#"><h7>NOMBRE NOTA</h7></a>
          <a href="#" style="font-size: 0.8em;">VER ANTERIOR</a>
        </div>
      </article>


      <article class="nota col-lg-6 col-md-6 col-6">
        <div class="fotoNota">
        <img src="img/cultura4.jpg" alt="Monito">
        </div>

        <div class="cuerpoNota">
          <a href="#"><h7>NOMBRE NOTA</h7></a>
          <a href="#" style="font-size: 0.8em;">VER SIGUIENTE</a>
        </div>
      </article>
    </div>
    </div>


    </div>
    </div>
  </section>



</main>
@endsection
