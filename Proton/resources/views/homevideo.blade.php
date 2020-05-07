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
        <form class="form-inline my-2 my-lg-0 ml-auto">

        </form>

      <div class="icon ml-4"></div>
      <h5>
        <a class="" href="/homeadmin" style="color:black"><i class="fas fa-sign-out-alt mr-3"></i></a>
      </h5>
      </div>
      </nav>
<body>
<div class="col-md-10 p-5 pt-2 mt-5">
      <h3><i class="fas fa-home mr-2"></i></i> Edit Video</h3><hr>

<div class="container">

    @foreach($edit as $e)
    <form action="{{ url('homevideoupdate') }}" method="POST">
    {{ @csrf_field() }}
    <h3>Edit Link</h3>
        <input type="hidden" name="id_video"  value="{{ $e->id_video }}">
    Link:<br>
        <input name="video" type="text"  class="form-control form-controll-sm"  value="{{ $e->video }}" ><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
    </div>      
</body>