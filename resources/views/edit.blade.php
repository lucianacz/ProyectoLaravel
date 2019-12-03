<link rel="stylesheet" href="css/edit.css">

<?php

//$query= mysql_db_query("$db","SELECT usuarios.Nombre, usuarios.pais FROM usuarios, notas WHERE usuarios.id = notas.idUsuario");

 ?>

@extends('layout')

@section('main')


<main>
  <section class="editar">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">EDITAR / ELIMINAR NOTAS</h4>

    <div class="row">



      <ul>
        @foreach ($notas as $nota)
        <li>
          
            <div class="editarCuerpo">
              <a href="{{$nota->id}}" style="text-transform: uppercase;">
              <h6>{{$nota->id}} - {{$nota->titulo}}</h6></a>
              <p>{{$nota->pais}}, {{$nota->region}} - {{$nota->usuario->nombre}} {{$nota->usuario->apellido}} </p>
              <a href="nota" style="text-transform: uppercase;"> Editar </a> | <a href="nota" style="text-transform: uppercase;"> Eliminar </a>
            </div>
        </li>
        @endforeach

      </ul>


    </div>




      </article>



    </div>
    </div>
  </section>

</main>

@endsection
