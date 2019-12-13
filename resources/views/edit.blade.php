<link rel="stylesheet" href="/css/estilosgente.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

//$query= mysql_db_query("$db","SELECT usuarios.Nombre, usuarios.pais FROM usuarios, notas WHERE usuarios.id = notas.idUsuario");

 ?>

@extends('layout')

@section('main')


<main>
  <section class="gente">
    <div class="col-lg-10 col-md-10 col-10">
      <h4 style="color:grey;">EDITAR / ELIMINAR NOTAS</h4>

    <div class="row">

        <p id="lista" name="lista"> </p>




    </div>



    <?php /* <ul>
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
*/ ?>





  </section>



  <script type="text/javascript">
  function dameListado (){



    //Traigo las NOTAS

    fetch('http://localhost:8000/api/edit')
      .then(function(respuesta)
      {
          return respuesta.json();
      })

      .then(function (datos){
        //lleva invertido lo que lleva un foreach en php
        //deberia de haber capturado el div donde meter los dato
        var divGeneral = document.querySelector('.row')
        for(nota of datos){

          //crear el div nuevo
            var divNuevo = document.createElement('div');
            //agregar al div que contiene el bootstrap
            divNuevo.setAttribute('class', 'nota col-lg-3 col-md-4 col-11')
          //clcocar el texto que seria nombre del genero




          //innerHTML Imprime html
            divNuevo.innerHTML = `

          <div class="fotoNota">
          <a href="http://localhost:8000/edit/nota/${nota.id}"> <img src="/storage/${nota.foto}" alt="${nota.epigrafe}"></a>
          <a onclick="event.preventDefault();document.querySelector('#editForm').submit();"><i class="fas fa-edit"></i></a>
          <a onclick="event.preventDefault();confirmDelete();"><i class="fas fa-trash-alt"></i></a>




          <form id="editForm" action="{{ url('http://localhost:8000/edit/nota/${nota.id}') }}" method="POST" style="display: none;">
              @csrf
          </form>

          <form id="deleteForm" action="{{ url('http://localhost:8000/delete/nota/${nota.id}') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </div>

          <div class="fotoNota">
            <a href="http://localhost:8000/edit/nota/${nota.id}" style="text-transform: uppercase;"><p style="text-align:center;">
              ${nota.titulo}
              <br>
              ${nota.pais}, ${nota.region}</p></a>


          </div>


          `;



            //divNuevo.innerHTML = '<div>' + nota.titulo + '<div>';
          //meter ese div nuev en el div capturado
          divGeneral.append(divNuevo);

          //console.log(nota);
        }
      })
      .catch(function (error){
        console.log(error);
      })
    //alert('hola me cargue')


  };

window.addEventListener('load', function (){
   dameListado()
});
function confirmDelete(event){
  swal({
  title: "Estas seguro?",
  text: "Una vez borrada no podrás recuperarla!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("La nota fue borrada exitosamente", {
      icon: "success",
    });
    document.querySelector('#deleteForm').submit();
  } else {
    swal("La nota sigue online :)");
    event.preventDefault();
  }
});
}
  </script>

</main>

@endsection
