<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="shortcut icon" href="/Logo/logo1.png">

        <title>KUDUS BISA - DONASI UNTUK WARGA</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Montserrat+Alternates:wght@700&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body>
      <nav class="navbar fixed-top navbar-light navbar-expand-lg text-center" style="box-shadow: none; background-color:#ffffff">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="/Logo/logo1.png" width="50" height="50" dclass="d-inline-block align-top"  alt="">
           <h class="navbar-brand h1" style="color:#000; font-size: 25px; font-family: 'Roboto', sans-serif; font-weight:900px;">KUDUS BISA</h>
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color:#e6e6e6ff;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto" >
          <li class="nav-item">
            <a class="nav-link"  href="/"><span>Beranda</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="/donasi"><span>Donasi</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="/tentang"><span>Tentang</span></a>
          </li>
        </ul>
      </div>
        </div>
  </nav>

    @yield( 'content' )
      <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark pt-4" style="font-family: sans-serif;">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Footer links -->
      <div class="row text-center text-md-left mt-3 pb-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4" style="opacity:0.5;">Tentang</h6>
          <img class="img-footer "src="/Logo/logo1.png" width="70" height="70" dclass="d-inline-block align-top"  alt="">
         <h1 class="navbar-brand" style="color:#fff; font-family: 'Roboto', sans-serif; font-weight:400;">Kudus Bisa</h1>
         <!-- <p  style="padding-left:50px;">Saling peduli sesama</p> -->
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4" style="opacity:0.5;">Links</h6>
          <p>
            <a href="/">Beranda</a>
          </p>
          <p>
            <a href="/">Donasi</a>
          </p>
          <p>
            <a href="/">Tentang</a>
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4" style="opacity:0.5;">Contact</h6>
              <p ><i class="fas fa-envelope mr-2"></i>kudosbisateams@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-2"></i> +62 896 8976 4256</p>
          <p>
            <i class="fas fa-home mr-2"></i> Jalan kudus-colo, Dawe, Kudus, Jawa Tengah 59333</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Footer links -->

      <hr>

      <!-- Grid row -->
      <div class="row d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-7 col-lg-8">

          <!--Copyright-->
          <p class="text-center text-md-left" style="opacity:0.5">© 2021 Copyright:
            <a href="/">
              <strong>Kudus Bisa</strong>
            </a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0">

          <!-- Social buttons -->
          <div class="text-center text-md-right" href="/">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.facebook.com/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1" href="https://www.twitter.com/">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1"  href="https://www.instagram.com/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

  </footer>
</body>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>
