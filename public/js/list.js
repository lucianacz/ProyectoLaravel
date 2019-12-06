function dameListado (){

window.addEventListener('load', = function (){

  //Traigo las NOTAS

  fetch('http://localhost:8000/api/list')
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
          divNuevo.innerHTML = `<div> ${nota.titulo} <div>`;

        <div class="fotoNota">
        <a href="/img/${nota.foto}> <img src="img/cultura8.jpg" alt="${nota.epigrafe}"></a>
        </div>

        <div class="cuerpoNota">
          <a href="http://localhost:8000/nota/edit/{id}" style="text-transform: uppercase; font-weight:bold;"><p>
            ${nota.titulo}
            <br>
            ${nota.pais}, ${nota.region}</p></a>
        </div>`



          //divNuevo.innerHTML = '<div>' + nota.titulo + '<div>';
        //meter ese div nuev en el div capturado
        divGeneral.append();

        //console.log(nota);
      }
    })
    .catch(function (error){
      console.log(error);
    })
  //alert('hola me cargue')

});
};
