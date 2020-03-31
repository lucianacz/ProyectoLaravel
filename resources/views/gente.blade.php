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

<div style="text-align:center;" class="col-lg-3 col-md-4 col-11">
  <form method="post" target="" enctype="multipart/form-data">
    @csrf

    <div class="uk-margin">
       <label class="uk-form-label" for="form-horizontal-select">Filtrar</label>
       <div class="uk-form-controls">
           <select onchange="somefunction($(this).val())" class="uk-select" id="form-horizontal-select">
               <option value="3">Sin filtros</option>
               <option value="1">Cultura Sariri</option>
               <option value="2">Todxs los viajerxs</option>
           </select>
       </div>
   </div>
 </form>
</div>



<script>
  function somefunction(value){
     if(value == 1){
      $("body").css("background-color","red");

      var divGeneral = document.querySelector('.row')

      if (datos.length == 0){
    //crear el div nuevo
      var divNuevo = document.createElement('div');
      //agregar al div que contiene el bootstrap
      divNuevo.setAttribute('class', 'nota col-lg-3 col-md-4 col-11')
      divNuevo.innerHTML = `
        <div class="fotoNota">
        <h4> No hay notas por editar</h4>
        <h5> Tambien podes:</h5>
        <a href="http://culturasariri.com.ar/newNote"> Crea una nueva nota </a>
        </br>
        <a href="http://culturasariri.com.ar/gente"> Mira las notas </a>
        </div>
      `;
      divGeneral.append(divNuevo);
      }

      for(nota of datos){

        //crear el div nuevo
          var divNuevo = document.createElement('div');
          //agregar al div que contiene el bootstrap
          divNuevo.setAttribute('class', 'nota col-lg-3 col-md-4 col-11')
        //clcocar el texto que seria nombre del genero

        //innerHTML Imprime html
          divNuevo.innerHTML = `

        <div class="fotoNota">

        <a href="http://culturasariri.com.ar/edit/nota/${nota.id}"> <img src="/storage/${nota.foto}" alt="${nota.epigrafe}"></a>
        <a href="http://culturasariri.com.ar/nota/${nota.id}" class="uk-icon-button  uk-margin-small-right" uk-icon="image"></a>
        <a href="http://culturasariri.com.ar/edit/nota/${nota.id}" class="uk-icon-button  uk-margin-small-right" uk-icon="pencil"></a>
        <a onclick="event.preventDefault();confirmDelete(event,this,${nota.id});" class="uk-icon-button  uk-margin-small-right" uk-icon="trash"></a>

        <form id="deleteForm${nota.id}" action="{{ url('http://culturasariri.com.ar/delete/nota/${nota.id}') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>

        <div class="fotoNota">
          <a href="http://culturasariri.com.ar/edit/nota/${nota.id}" style="text-transform: uppercase;"><p style="text-align:center;">
            ${nota.titulo}
            <br>
            ${nota.pais}, ${nota.region}</p></a>
        </div>  `;


          //divNuevo.innerHTML = '<div>' + nota.titulo + '<div>';
        //meter ese div nuev en el div capturado
        divGeneral.append(divNuevo);

        //console.log(nota);
      }





     }
     if(value == 2){
       $("body").css("background-color","yellow");
     }
     if(value == 3){
       $("body").css("background-color","white");
     }
  }
   </script>

    <div class="row">
      @foreach ($notas as $nota)
      <article class="nota col-lg-3 col-md-4 col-11">
        <div class="fotoSameSize" style="width:100%; height:25vh;">
        <a href="{{url('nota/'.$nota->id)}}"> <img style="width:100%; height:24vh; object-fit: cover;" src="/storage/{{$nota->foto}}" alt="{{$nota->pais}}"></a>
        </div>



        <div class="cuerpoNota">
          <a href="{{url('nota/'.$nota->id)}}" style="text-transform: uppercase; text-align:center; font-weight:bold; color: black;"> {{$nota->subtitulo}} - <strong>{{$nota->pais}}</strong></p></a>
          <p class="muestraUsuario" style="text-transform: uppercase; text-align:center; color: grey;"> @ {{$nota->usuario->nombreUsuario}} </p>
        </div>
      </article>
      @endforeach
    </div>
    </div>
  </section>
  <br>
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
