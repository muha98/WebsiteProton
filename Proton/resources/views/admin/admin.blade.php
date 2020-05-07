<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    
    <title>@yield('title')</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
      <a class="navbar-brand" href="#">ADMIN | <b>Bimble Proton</b></a>
      <a class="nav-link" style="color:white" href="{{ route('register') }}">{{ __('Register') }}</a>
        <form class="form-inline my-2 my-lg-0 ml-auto">

        </form>
      <div class="icon ml-4"></div>
      <h5>
        <a class="" href="/home" style="color:black"><i class="fas fa-sign-out-alt mr-3"></i></a>
      </h5>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="/homeadmin"><i class="fas fa-home mr-2"></i></i>Home</a><hr class="bg-secondary">       
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/materiadmin"><i class="fas fa-book mr-2"></i></i>Materi</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/videoadmin"><i class="fas fa-video mr-2"></i></i>Video</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="/staffadmin"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Staff </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="aboutadmin.blade.com"><i class="fas fa-tachometer-alt mr-2"></i>About</a><hr class="bg-secondary">
          </li>
      </ul>
      </div>