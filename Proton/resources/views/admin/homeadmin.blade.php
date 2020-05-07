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

        <a class="" href="/admin" style="color:black"><i class="fas fa-sign-out-alt mr-3"></i></a>
      </h5>
      </div>
      </nav>
      <!HOME>
      <div class="col-md-10 p-5 pt-2 mt-5">

      <h3><i class="fas fa-home mr-2"></i></i>Home : Video</h3><hr>
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id Video</th>
              <th scope="col">Video</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $staff2 as $stf2 )
            <tr>
              <td> {{ $stf2->id_video }} </td>
              <td> {{ $stf2->video }} </td>
              <td><a href="{{ url('homevideo/'.$stf2->id_video) }}" class="btn btn-primary">Edit</a></td>
            </tr>
          @endforeach 
        </table>

      <h3><i class="fas fa-home mr-2"></i></i>Home : Carousel</h3><hr>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id Carousel</th>
              <th scope="col">Gambar</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $staff as $stf )
            <tr>
              <td> {{ $stf->id_carousel }} </td>
              <td> {{ $stf->gambar }} </td>
              <td><a href="{{ url('homecarousel/'.$stf->id_carousel) }}" class="btn btn-primary">Edit</a></td>
            </tr>
          @endforeach   
        </table>

        <h3><i class="fas fa-home mr-2"></i></i>Home : Artikel</h3><hr>
          <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th scope="col">Id Artikel</th>
              <th scope="col">Foto</th>
              <th scope="col">Isi</th>
              <th colspan="3" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          @foreach( $staff3 as $stf3 )
            <tr>
              <td> {{ $stf3->id_artikel }} </td>
              <td> {{ $stf3->foto }} </td>
              <td> {{ $stf3->isi }} </td>
              <td><a href="{{ url('homeartikel/'.$stf3->id_artikel) }}" class="btn btn-primary">Edit</a></td>
            </tr>
          @endforeach   
        </table>

      </div>
    </div>  
</body>
</html> 