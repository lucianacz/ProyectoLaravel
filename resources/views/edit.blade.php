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
        <p id="lista" name="lista"></p>
    </div>


    <div class="row">
        <p id="listaFoto" name="listaFoto"></p>
    </div>

  </section>



  <script type="text/javascript">
  function dameListado (){


    //Traigo las NOTAS

    fetch('http://culturasariri.com.ar/api/edit/{{Auth::user()->id}}')
      .then(function(respuesta)
      {
          return respuesta.json();
      })

      .then(function (datos){
        //lleva invertido lo que lleva un foreach en php
        //deberia de haber capturado el div donde meter los dato
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






      })
      .catch(function (error){
        console.log(error);
      })
    //alert('hola me cargue')

  };

window.addEventListener('load', function (){
   dameListado()
});


function confirmDelete(event,tag,idNota){
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

    document.querySelector('#deleteForm'+idNota).submit();
  } else {
    swal("La nota sigue online :)");
    event.preventDefault();
  }
});
}






  </script>

</main>

@endsection
