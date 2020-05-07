<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
  <div class="fixed-top" style="background: linear-gradient(#8ac6d1, #FFFFFF);">
  <img src="{{ ('img/ptn.jpg') }}" width="100" height="100" class="float-left" style="margin-left: 60px; margin-top: 17px; border: 5px outset white">
    @yield('container1')
    <nav class="navbar navbar-expand-lg" >
    <a class="navbar-brand" href="/">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" style="margin-bottom:5px">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="btn btn-outline-primary" style="font-size: 15px" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" style="font-size: 15px; margin-left: 20px" href="/materi">Materi</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" style="font-size: 15px; margin-left: 20px" href="/video">Video</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" style="font-size:15px; margin-left: 20px" href="/staff">Staff</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" style="font-size: 15px; margin-left: 20px" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-primary" style="font-size: 15px; margin-left: 600px" href="/login">Log In</a>
      </li>
    </ul>
  </div>
</nav>
</div>

  @yield('container2')

  <div class="card" style="background: linear-gradient(#8ac6d1, #FFFFFF);">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Website Pembelajaran Proton dari bimbingan belajar proton</p>
      <footer class="blockquote-footer">Muha <cite title="Source Title">Proton</cite></footer>
    </blockquote>
  </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>