<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <link rel="icon" type="image/png" href="../assets/css/svfc.png" />
  <title>SVFC- CliniQuickAid Appointment System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="home"><span class="text-primary">Clini</span>-QuickAid</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            
            @if(Route::has('login'))

            @auth

            <x-app-layout>
            </x-app-layout>

            @else
            
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            
            @endif
            <!-- <img src="{{ asset('assets/css/svfc.png') }}" alt="svfclogo" class=" ml-auto" nav-item/> -->


        
        </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bsit.jpg); fix">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="display-4 btn-headcolor ">CliniQuickAid</span><Br><br>
        <span class="subhead">your health</span>
        <h1 class="display-4">Deserves Quick Care</h1>
        <a href="#" class="btn btn-primary">Make Your Appointment Now!</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with Assistant Bot</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Health<br></span> Check-ups</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-calendar"></span>
              </div>
              <p><span>Appointment</span>-Scheduling</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to the <br>Clini-QuickAid Appointment</h1>
            <p class="text-grey mb-4 mt-5"> <b>This is not the legitimate paragpraph in deployment. This is only a fake prompts.</b>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ad mollitia dolore nostrum sit doloremque deserunt id ullam magnam, earum recusandae ea a similique eius laboriosam libero. Facere, quos corporis.</p>
            <a href="about.html" class="btn btn-primary">Details...</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

@include('user.doctor')

@include('user.latest')

@include('user.appointment')


</div> <!-- .page-section -->


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>School Information</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Management Information <br>System</a></li>
            <li><a href="#">CHED</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>School Social Media's</h5>
          <ul class="footer-menu">
            <li><a href="#">Facebook: &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a> </a></li>
            <li><a href="#">Instagram &nbsp; <a href="#" target="_blank"><span class="mai-logo-instagram-f"></span></a></a></li>
            <li><a href="#">Viber &nbsp; <a href="#" target="_blank"><span class="mai-logo-viber-f"></span></a></a></li>
            <li><a href="#">Telephone: </span></a></a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Project created by:</h5>
          <a href="#" class="footer-link mt-2">Aligan, Rhed N. </a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" class="footer-link" mt-2>Buenafe, Danilo Jr.</a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" class="footer-link" mt-2>Coniaro, Joanna Mae M.</a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" class="footer-link" mt-2>Coronel, Cristina A.</a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" class="footer-link" mt-2>Lumba, Bryan Justine.</a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="#" class="footer-link" mt-2>Paz, Emmanuel Ray</a> &nbsp; <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>

          <!-- <div class="footer-sosmed mt-3">
            <h5 class="mt-3">Social Media</h5>
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div> -->
        </div>
      </div>

      <hr>

      <p id="copyright"> All rights reserved © 2025</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>