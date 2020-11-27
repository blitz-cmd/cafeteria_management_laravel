<!DOCTYPE html>
<html lang="en">
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cafeteria</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="main-loader"></div>

  <div>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0 fas fa-coffee" href="/" style="padding-right: 20px;font-size: 30px;"><span style="padding-left: 20px;">Cup o' Joe</span></a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link dep" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="news">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="#">Contact Us</a>
      </li>
      <?php
      $username=Session::get('username');
      // Session()->put('pdetails1','index');
        if(session('username')){
          echo '<li class="nav-item">
          <a class="nav-link dep" href="#">Welcome '.$username.'</a>
          </li>';
          echo '<li class="nav-item">
          <a class="nav-link dep" href="logout">Logout</a>
          </li>';
        }else{
          echo '<li class="nav-item">
                  <a class="nav-link dep" href="login">Login</a>
                </li>';  
                echo '<li class="nav-item">
                  <a class="nav-link dep" href="signup">SignUp</a>
                </li>';
        }
      ?>
    </ul>

    
  </div>
</nav>

 
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner"><div id="ban2" class="carousel-caption  d-md-block" style="text-align: justify;padding-bottom: 177px;">
      <h1 id="hxh"><span></span>Welcome to Cup o' Joe</h1>
      <p class="dxd" style="color:white;font-family: 'Lobster', cursive;font-size: large;">'The Night Cafe' and 'The Starry Night' still emit such pathos, density, and intensity that they send shivers down the spine. Whether Van Gogh thought in color or felt with his intellect, the radical color, dynamic distortion, heart, soul, and part-by-part structure in these paintings make him a bridge to a new vision and the vision itself.</p>
        <p class="dxd" style="color:white;float: right;font-family: 'Lobster', cursive;font-size: large;">-Jerry Saltz</p>
    </div>
      <div class="carousel-item active">
        <img class="ghj" src="{{ asset('images/tony-lee-8IKf54pc3qk-unsplash.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="ghj" src="{{ asset('images/nathan-dumlao-I_394sxx0ec-unsplash  (2).jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="ghj" src="{{ asset('images/nathan-dumlao-6VhPY27jdps-unsplash  (2).jpg') }}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div id="drf" style="padding-bottom: 235px;">
    <h1 id="drf1">GAME DAY PARTY PACKAGES</h1>
    <hr style="padding-bottom: 5px;width: 14%;color: white;background-color: white;">
    <p style="padding-top: 31px;color: white;font-size: 30px;margin-bottom: 0;font-family: 'Oswald', sans-serif;letter-spacing: 1px;padding-bottom: 20px;">FEED YOUR SQUAD OF 6 FOR ₹1000 OR 12 FOR ₹1500 ON GAME DAY.</p>
    <p style="font-size: 30px;color: white;padding-bottom: 27px;font-family: 'Oswald', sans-serif;letter-spacing: 1px;">ORDER ONLINE OR BY DRIVE-THRU FOR SAME-DAY PICKUP.</p>
    <a href="order" class="btn aza">ORDER ONLINE</a>
  </div>


    <div class="container row1" id="ord">
      <div class="col-xl-5">
        <h1 style="font-family: 'Ranchers', cursive;font-size: revert;">3 WAYS TO <br><span style="font-family: 'Sansita Swashed', cursive;font-size: 90px;">JOE</span> <img src="images/oderr.jpg" alt=""> </h1>
        <p style="font-family: 'Pacifico', cursive;letter-spacing: 3px;">Select your pickup preference when <br>you Order from our site</p>
        <a href="news" class="btn btn-info" style="border-radius: 20px;font-weight: 900;">SEE HOW WE'RE SERVING SAFELY</a>
      </div>
      
      <div class="col-xl-7">
        <img src="{{ asset('images/curbside.jpg') }}" alt="" class="img">
        <img src="{{ asset('images/drive thru.jpg') }}" alt="" class="img">
        <img src="{{ asset('images/in store.jpg') }}" alt="" class="img">
      </div>
    </div>


@extends('footer')

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- <script src="index.js"></script> -->

  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
        var $preLoader = $(".main-loader");
        $(window).load(function() {
        $preLoader.fadeOut(""); // Animate loader off screen
        });

        $(function () {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
         })
        })
    </script>
</html>