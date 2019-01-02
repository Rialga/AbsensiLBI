

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laboratory Of Business Intelegence</title>

   

    <!-- Bootstrap core CSS -->
    <link href="welcome/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     

    <!-- Custom fonts for this template -->
    <link href="welcome/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="welcome/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="welcome/css/creative.min.css" rel="stylesheet">



  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">LBI</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/internship') }}">Internship</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
                @auth
                  <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
                @else
                  <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
                  @endauth
              @endif   
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex image image-full">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Laboratory Of Business Intelegence</strong>
            </h1>
            <hr>
          </div>

        </div>
      </div>
    </header>

    <section class="" id="about" style="background-color: #2ECCFA">
      <table style="width:100%">
        <tr>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <th style="width:5%"></th>
                    <th style="width:55%">
                        <h2 class="section-heading text-white text-center">About LBI</h2>
                        <hr class="light my-4">
                          <p class="text-faded mb-4">Laboratorium Business Intelligence merupakan salah satu laboratorium riset yang ada di Jurusan Sistem Informasi Fakultas Teknologi Informasi Universitas Andalas. LBI didirikan pada tahun 2017 dan merupakan laboratorium keempat yang berdiri di Jurusaan Sistem Informasi Fakultas Teknologi Informasi Universitas Andalas</p>
                          <p class="text-faded mb-4"> Fokus bidang ilmu dari Laboratorium Business Intelligence diantaranya adalah Bussiness Intelligence, Data Mining, Big Data dan Artificial Intelligence. Laboratorium Business Intelligence saat ini dikepalai oleh salah satu dosen di Jurusan Sistem Informasi, yaitu Ibu Meza Silvana, MT.</p>
                          <p class="text-faded mb-4"> Alamat labor :  Kampus Unand Limau Manis, Padang – Fakultas Teknologi Informasi Unand </p>
                          <p class="text-faded mb-4"> Email : laborbi.si.fti@gmail.com </p>
                          <p class="text-faded mb-4"> Instagram : lbi.si.unand </p>
                          <p class="text-faded mb-4"> Line : tba5845w </p>
                      </th>
                      <th style="width:10%"></th>
                      <th style="width:30%">
                          <img class="img-responsive" src="welcome2/img/lbi.jpg" width="350px" height="350px" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19">
                     </th>
              </div>
            </div>
        </tr>
      </table>
    </section>


<!--     <section id="contact" style="background-color:#81DAF5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">LBI</h2>
            <hr class="my-4">
            <p class="mb-5">xxxxxxxxxxxxxxxxxxxxx</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>xxx-xxx-xxx</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">XxXXXXX</a>
            </p>
          </div>
        </div>
      </div>
    </section>
 -->
    <!-- Bootstrap core JavaScript -->
    <script src="welcome/vendor/jquery/jquery.min.js"></script>
    <script src="welcome/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="welcome/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="welcome/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="welcome/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="welcome/js/creative.min.js"></script>

  </body>

</html>
