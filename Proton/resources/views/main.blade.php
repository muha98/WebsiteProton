@extends('layouts/app')

@section('title','Website Pembelajaran Proton')



 @section('container2')

  <div class="row" style="margin-top: 20px">
  <div class="col-md-12 col-xs-12">
    <center>
<div class="jumbotron card card-image" style="background-image: url('img/jumbotron.jpg');  background-size: cover; background-repeat: no-repeat; background-position: center; ">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Selamat Datang Di Website PROTON</strong></h2>
    </div>
  </div>
</div>
</center>
</div>
</div>





  <div class="container-fluid">
  <div class="row" style="margin-top: 0px">
  <div class="col-md-12 col-xs-12">
    <center>
<div class="row">
@php
  $i = array()
@endphp
@foreach ($video as $vid)
  @php
  $i[] = $vid->video
  @endphp
@endforeach
  <div class="col-md-4" style="margin-top: 3px">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="@php echo($i[0]) @endphp"
                allowfullscreen></iframe>
            </div>

          </div>




  <div class="col-md-4" style="margin-top: 3px">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="@php echo($i[1]) @endphp"
                allowfullscreen></iframe>
            </div>

          </div>




  <div class="col-md-4" style="margin-top: 3px">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="@php echo($i[2]) @endphp"
                allowfullscreen></iframe>
            </div>

          </div>


  </div>
    </center>
</div>
</div>
</div>


<div class="container-fluid">
  <div class="row" style="margin-top: 40px">
    <div class="col-md-12">

<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
  @php
  $i = array()
@endphp
@foreach ($gambar as $gam)
  @php
  $i[] = $gam->gambar
  @endphp
@endforeach
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="@php echo($i[0]) @endphp" class="img-fluid" alt="Responsive image"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="@php echo($i[1]) @endphp" class="img-fluid" alt="Responsive image"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="@php echo($i[2]) @endphp" class="img-fluid" alt="Responsive image"
        alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

</div>
</div>
</div>


 <div class="container-fluid">
  <div class="row" style="margin-top: 20px">
  <div class="col-md-12 col-xs-12">
    <center>
<div class="row">
@php
  $i = array()
@endphp
@foreach ($foto as $fot)
  @php
  $i[] = $fot->foto
  @endphp
@endforeach

@php
  $k = array()
@endphp
@foreach ($isi as $isi)
  @php
  $k[] = $isi->isi
  @endphp
@endforeach

  <div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="@php echo($i[0]) @endphp" class="img-fluid" alt="Responsive image" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">@php echo($k[0]) @endphp</p>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="@php echo($i[1]) @endphp" class="img-fluid" alt="Responsive image" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">@php echo($k[1]) @endphp</p>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="@php echo($i[2]) @endphp" class="img-fluid" alt="Responsive image" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">@php echo($k[2]) @endphp</p>
  </div>
</div>
</div>
</div>
</center>

  </div>
  </div>
</div>





 @endsection 
