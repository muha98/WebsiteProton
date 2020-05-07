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

  <div class="container-fluid" style="width: 100%; height: 100%;">

  <div class="row">
  <div class="col-md-12">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Proton</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

     <ul class="nav justify-content-center">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/materi">Materi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/video">Video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/staff">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>


        <!-- Authentication Links -->
        @guest


                            <li class="nav-item">
                                <a class="nav-link" style="font-size: 15px;"href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))

                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </ul>


                        @endguest

  </div>
</nav>
</div>
</div>







  <div class="row" style="background-color: white">
    <div class="col-md-12">
  @yield('container2')
</div>
</div>



    <div class="row" style="margin-top: 20px; background-color: #ced4da">
    <div class="col-md-12">
<!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background-color: #ced4da; color: black">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left" style="background-color: #ced4da">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 mt-md-0 mt-3">

        <!-- Content -->
          <div style="text-align: center;">
        <h5 class="text-uppercase font-weight-bold">Proton</h5>
        <p>Lampung</p>
          </div>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->

      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="/"> Proton</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
