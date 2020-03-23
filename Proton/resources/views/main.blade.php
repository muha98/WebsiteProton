@extends('layout/index')

@section('title','Website Pembelajaran Proton')

@section('container1')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h4 class="display-4">PROTON</h4>
    </div>
  </div>
</div>
 @endsection 

 @section('container2')

 <div class="jumbotron jumbotron-fluid" style="margin-top: 80px; background:white;">
  <div class="container">
    <h1 class="display-4">Selamat Datang di Website Proton</h1>
    <p class="lead">Kami adalah bimbingan belajar yang ada dilampung</p>
  </div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top:-80px; margin-bottom: 50px">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ ('img/hehe.jpg') }}" class="d-block w-120" style="height:400px; margin-left: 250px; width:1000px" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/hehe.jpg') }}" class="d-block w-120" style="height:400px; margin-left: 250px; width:1000px" alt="">
    </div>
    <div class="carousel-item">
      <img src="{{ ('img/hehe.jpg') }}" class="d-block w-120" style="height:400px; margin-left: 250px; width:1000px" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div style="margin-top: -20px; margin-left: 120px">
  <iframe width="420" height="315"
  src="https://www.youtube.com/embed/XZgiNnGB8m4?list=LLKypvooOEm9Cp-HCrYeJnNg?autoplay=1">
  </iframe>
  <iframe width="420" height="315"
  src="https://www.youtube.com/embed/XZgiNnGB8m4?list=LLKypvooOEm9Cp-HCrYeJnNg?autoplay=1">
  </iframe>
  <iframe width="420" height="315"
  src="https://www.youtube.com/embed/XZgiNnGB8m4?list=LLKypvooOEm9Cp-HCrYeJnNg?autoplay=1">
  </iframe>
</div>

<div class="mt-5">
<ul class="list-unstyled">
  <li class="media">
    <img src="..." class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
  <li class="media my-4">
    <img src="..." class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
  <li class="media">
    <img src="..." class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
</ul>
</div>
 @endsection 
