<link rel="stylesheet" href="/css/estiloscarga.css">


@extends('layout')

@section('main')




<main>
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">GENTE Y CULTURAS</h4>

    <div class="row">

      <article class="nota col-lg-12 col-md-12 col-11 principal2">

        <h6 style="font-weight:bold;">{{$nota->titulo}} </h7>
        <h6 style="font-size:19px;font-weight:lighter;"> {{$nota->region}}, {{$nota->pais}} </h6>
        <div class="fotoNota">
        <img src="/img/{{$nota->foto}}"  alt="Foto">
        </div>

        <div class="cuerpoNotaPrincipal">
          <p>{{$nota->parrafo1}}</p>
          <div class="destacado"> <p style="color:green;">{{$nota->destacado}}</p></div>

          <p> {{$nota->parrafo2}}</p>
        </div>

        <div class="video col-12">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/MA8-Ld8zYkk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </article>


    </div>
    </div>

</main>


@endsection
