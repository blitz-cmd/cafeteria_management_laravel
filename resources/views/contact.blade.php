<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/footer.css') }}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<style>
/* body {
  background-color: #860b0b;
} */
</style>
<body>
<!-- <div> -->
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
        <a class="nav-link dep" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dep" href="contact">Contact Us</a>
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

<div class="jumbotron text-center">
  <h1 style="font-size:60px; font-family: sans-serif;">Contact Us</h1>
  </div>
<section class="text-gray-700 body-font relative" >
  <div class="container px-5 py-24 mx-auto flex sm:flex-no-wrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104793.53372777205!2d72.87297152913878!3d19.0593199962592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1603028977958!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <div class="bg-white relative flex flex-wrap py-6">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">ADDRESS</h2>
          <p class="leading-relaxed">Mumbai, India</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm">EMAIL</h2>
          <a class="text-blue-500 leading-relaxed">coe-cafe@mail.com</a>
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mt-4">PHONE</h2>
          <p class="leading-relaxed">+91-9465239120</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-blue flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-2 font-medium title-font">CONTACT US</h2>
      <p class="leading-relaxed mb-5 text-gray-600">We're here to help and answer any question. We look forward to hearing from you!</p>
      <input class="bg-white rounded border border-grey-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Name" type="text">
      <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
      <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-indigo-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
      <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
      <!-- <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p> -->
    </div>
    
  </div>
</section>
<!-- </div> -->
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