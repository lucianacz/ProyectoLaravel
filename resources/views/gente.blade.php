<link rel="stylesheet" href="css/estilosgente.css">

<?php

//$query= mysql_db_query("$db","SELECT usuarios.Nombre, usuarios.pais FROM usuarios, notas WHERE usuarios.id = notas.idUsuario");

 ?>

@extends('layout')

@section('main')


<main>
  <section class="gente">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">GENTE Y CULTURAS</h4>

    <div class="row">


      @foreach ($notas as $nota)
      <article class="nota col-lg-3 col-md-4 col-11">
        <div class="fotoNota">
        <a href="nota"> <img src="img/{{$nota->foto}}" alt="{{$nota->epigrafe}}"></a>
        </div>



        <div class="cuerpoNota">
          <a href="nota/{{$nota->id}}" style="text-transform: uppercase; font-weight:bold;"><p> {{$nota->titulo}}
            <br>
            {{$nota->pais}}, {{$nota->region}}</p></a>

          <p>{{$nota->usuario->nombre}}, {{$nota->usuario->pais}},  {{$nota->id}} </p>
        </div>
      </article>
      @endforeach



    </div>
    </div>
  </section>

</main>

@endsection
