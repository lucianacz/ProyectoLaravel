<link rel="stylesheet" href="/css/estilosNota.css">


@extends('layout')

@section('main')




<main>
    <section class="culturas">
      <div class="col-lg-6 col-md-6 col-10">
        <h6> <a href="/gente"> Volver a notas</a> </h6>

      <h4 style="color:grey;">{{$nota->region}}, {{$nota->pais}}</h4>

    <div class="row">

      <article class="nota col-lg-12 col-md-12 col-11 principal2">
        <h6 style="font-size:19px;font-weight:lighter;"> {{$nota->titulo}} </h6>
        <div class="fotoNota">
        <img src="/storage/{{$nota->foto}}"  alt="Foto">
        </div>

        <div class="cuerpoNotaPrincipal">
          <p>{{$nota->fecha->format('m-Y')}}</p>
          <p>{{$nota->parrafo1}}</p>
          <div class="destacado"> <p>{{$nota->destacado}}</p></div>
          <p> {{$nota->parrafo2}}</p>
        </div>


        <div class="video col-12">
          <iframe width="560" height="315" src="{{$nota->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
  
      </article>


    </div>
    </div>

</main>


@endsection
