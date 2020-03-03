<link rel="stylesheet" href="css/estilosformulario.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



@extends('layout')

@section('main')


<main>

  <section class="culturas">
    <div class="col-lg-6 col-md-6 col-10">
      <h4 style="color:grey;">ESCRIBINOS</h4>
      <h5> culturasariri@gmail.com</h5>
      <h5> Buenos Aires, Argentina</h5>


      <form action="contact.php" method="post">
        <div class="form-row">

<div class="col-md-6 mb-3">
  <input type="text" class="form-control" name="name" placeholder="Nombre" required>
</div>

<div class="col-md-6 mb-3">
  <input type="email" class="form-control" name="email" placeholder="Email" required>
</div>


<div class="col-md-12 mb-3">
  <textarea type="text" class="form-control" name="mensaje" placeholder="Mensaje" rows="7"required>
  </textarea>
</div>

</div>


<button class="btn btn-primary" onclick="event.preventDefault();confirm();" type="submit">Enviar</button>
</form>

<script>


function confirm(event){
  swal({
  title: "Enviado con exito",
  icon: "success",
  buttons: true,
  dangerMode: true,
})
};




</script>




    </div>
  </section>
</main>

@endsection
