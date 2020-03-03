

 <link rel="stylesheet" href="/css/estilosperfil.css">


 @extends('layout')

 @section('main')


<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10 datos">
      <h4 style="color:grey;">BIENVENIDX </h4>
      <h5> {{$usuario->name}} {{$usuario->apellido}} </h5>
      <a href="http://culturasariri.com.ar/edit/perfil/{{$usuario->id}}" class="uk-icon-button  uk-margin-small-right" uk-icon="pencil">></a>

	<div class="datos col-lg-6 col-md-6 col-10">
		<p> Nombre completo: {{$usuario->name}} {{$usuario->apellido}}</p>
    <p> Usuario: {{$usuario->nombreUsuario}}</p>
		<p> Email: {{$usuario->email}}</p>
		<p> Pais: {{$usuario->pais}}</p>



	</section>


</main>


@endsection
