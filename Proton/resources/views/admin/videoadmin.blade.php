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
<!Video>
      <div class="col-md-10 p-5 pt-2 mt-5">
      <h3><i class="fas fa-video mr-2"></i></i> Video</h3><hr>

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
          @foreach( $staff as $stf )
            <tr>
          
              <td> {{ $stf->kategori }} </td>
              <td> {{ $stf->mapel }} </td>
              <td> {{ $stf->link }} </td>
              <td><a href="{{ url('videoedit/'.$stf->id) }}" class="btn btn-primary">Edit</a></td>
              
            </tr>
          @endforeach 
    
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>