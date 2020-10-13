
@extends('home')

@section('center')



<!DOCTYPE html>
<html>
<head>
  <title>Gallary</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<style>
      .container{
        background-color: #000000;
        text-align: center;
      }

      body{
  background-color: black;
  }
</style>
</head>
<body>

<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">


    <div class="carousel-item active">
      <!---<img src="img/.jpeg" class="d-block w-50 p-50" alt="..." >--->
      <img src="img/img3.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>


   


    <div class="carousel-item ">
      <!---<img src="img/.jpeg" class="d-block w-50 p-50" alt="..." >--->
      <img src="img/img4.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>



    <div class="carousel-item ">
      <!---<img src="img/.jpeg" class="d-block w-50 p-50" alt="..." >--->
      <img src="img/img7.jpeg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>


    <div class="carousel-item ">
      <!---<img src="img/.jpeg" class="d-block w-50 p-50" alt="..." >--->
      <img src="img/img8.jpg" class="d-block w-100" alt="..." height="600px">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>




  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</div>

@endsection
