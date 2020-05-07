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
      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">ADMIN | <b>Bimble Proton</b></a>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      <div class="icon ml-4"></div>
      <h5>
        <i class="fas fa-envelope mr-3"></i>
        <i class="fas fa-sign-out-alt mr-3"></i>
      </h5>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="#"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
            
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-user-graduate mr-2"></i>Daftar Siswa</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Pengajar </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i>Daftar Staff </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i>Materi </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i> Video </a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher mr-2"></i>Jadwal Bimble </a><hr class="bg-secondary">
          </li>
      </ul>
      </div>
      <!dashboard>
      <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-user-graduate mr-2"></i> Daftar Siswa</h3><hr>


      </div>
    </div>
  </body>
</html>