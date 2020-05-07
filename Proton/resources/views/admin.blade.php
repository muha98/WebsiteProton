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
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 bg-white" type="submit">Search</button>
        </form>
      <div class="icon ml-4"></div>
      <h5>
        <i class="fas fa-envelope mr-3"></i>
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
      <!HOME>
      <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-home mr-2"></i></i>Home</h3><hr>



      <class class="row text-white">
        <div class="card bg-info ml-5" style="width: 18rem;">
          <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-user-graduate mr-2"></i>
          </div>
            <h5 class="card-title">Jumlah Siswa</h5>
            <div class="display-4">500</div>
            <a href="" class=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
        <div class="card bg-success ml-5" style="width: 18rem;">
          <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-chalkboard-teacher mr-3"></i>
          </div>
            <h5 class="card-title">Jumlah Pengajar</h5>
            <div class="display-4">50</div>
            <a href="" class=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
        <div class="card bg-info ml-5" style="width: 18rem;">
          <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-chalkboard-teacher mr-3"></i>
          </div>
            <h5 class="card-title">Jumlah Staff</h5>
            <div class="display-4">500</div>
            <a href="" class=""><p class="card-text text-white">Lihat detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
      </div>
    </div>  
      <!Materi>
      <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-book mr-2"></i>Materi</h3><hr>

          <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Link Materi</a>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Kategori</th>
              <th scope="col">Mapel</th>
              <th scope="col">Link Google Drive</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>SD</td>
              <td>MTK</td>
              <td>http://googledrive.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>SMP</td>
              <td>PAI</td>
              <td>http://googledrive.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>SMA</td>
              <td>KIMIA</td>
              <td>http://googledrive.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <!Video>
      <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-video mr-2"></i></i> Video</h3><hr>

          <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Link Video</a>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Kategori</th>
              <th scope="col">Mapel</th>
              <th scope="col">Link Youtube</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>SMP</td>
              <td>PAI</td>
              <td>https://youtube.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>SD</td>
              <td>Matematika</td>
              <td>https://youtube.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>SMA</td>
              <td>Kimia</td>
              <td>https://youtube.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

    <!daftar Staff>
      <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-chalkboard-teacher mr-2"></i> Daftar Staff</h3><hr>

          <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>Tambah Data Staff</a>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama Staff</th>
              <th scope="col">E-mail</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>A123</td>
              <td>Titis</td>
              <td>Titis@gmail.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>B123</td>
              <td>Yustika</td>
              <td>Yustika@gmail.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
            <tr>
              <td>Cikal</td>
              <td>C123</td>
              <td>Cikal@gmail.com</td>
              <td><a href="" class="btn btn-primary">Detail</a></td>
              <td><i class="fas fa-edit"></i></td>
              <td><i class="fas fa-trash-alt"></i></td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>

  </body>
</html>
