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
      <?php /* <form class="uk-search uk-search-default">
      <span uk-search-icon></span>
      <input class="uk-search-input" type="search" placeholder="Buscar...">
    </form>*/ ?>

    <h5> SUBI TU NOTA</h5>
    <a href="/newNote" class="uk-icon-button  uk-margin-small-right" uk-icon="plus"></a>

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; min-height: 300; max-height: 400">
      <BR>

    <div class="row">


      @foreach ($notas as $nota)
      <article class="nota col-lg-3 col-md-4 col-11">
        <div class="fotoNota">
        <a href="{{url('nota/'.$nota->id)}}"> <img src="/storage/{{$nota->foto}}" alt="{{$nota->epigrafe}}"></a>
        </div>



        <div class="cuerpoNota">
          <a href="{{url('nota/'.$nota->id)}}" style="text-transform: uppercase; font-weight:bold;"><p> {{$nota->titulo}}
            <br>
            {{$nota->pais}}, {{$nota->region}}</p></a>

          <p>{{$nota->usuario->name}}, {{$nota->usuario->pais}} </p>
        </div>
      </article>
      @endforeach



    </div>
    </div>
  </section>

</main>

@endsection
