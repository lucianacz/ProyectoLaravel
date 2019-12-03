<?php session_start(); ?>

@extends('layout')

@section('main')

<link rel="stylesheet" href="css/estilosformulario.css">


<main>




  <section class="explora">
    <div class="col-lg-6 col-md-8 col-10">
      <h4 style="color:grey;">EXPLORA</h4>
      <h5> SUBI TU FOTO</h5>

      <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
      <div class="carousel-inner w-100">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/slider3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>



  </section>
</main>

@endsection
