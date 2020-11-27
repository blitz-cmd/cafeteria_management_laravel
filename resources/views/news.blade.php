<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>News</title>  
  <link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/favicon.png') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/news.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/footer.css') }}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">




</head>
<body>


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
            if(session('username')){
              echo '<li class="nav-item">
              <a class="nav-link dep" href="#">Welcome '.session('username').'</a>
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




  <div class="container row1" style="background-color:#E8F4F7 ;padding-left: 0;margin-top: 87px;margin-bottom: 87px;padding-right: 0">
    <div class="col-xl-7 col-sm-12" style="padding-left: 0;padding-right: 0;">
      <img src="{{ secure_asset('images/mask.jpg') }}" style="width: 100%;height: 100%">      
    </div>
    <div class="col-xl-5 col-sm-12" style="text-align: center;color:#0A8FA5 ;padding-right: 0;padding-top: 44px;padding-left: 0">
      <p style="font-family: 'Oswald', sans-serif;font-size: 40px;">DIDICATED TO SERVING</p>
      <p style="font-family: 'Sansita Swashed', cursive;font-size: 37px;">Safely & Responsibly</p>
      <p style="font-family: 'Oswald', sans-serif;font-size: 40px;">WITH A SMILE</p>      
    </div>    
  </div>

<div style="text-align: center;padding-left: 100px;padding-right: 100px;" class="container" id="tgf">
  <div>
    <h1 style="font-family: 'Sansita Swashed', cursive;font-size: 3em;text-decoration: underline;">News & Update</h1>
    <h1 class="fon">Face covering required in-store for you and our team members to help keep everyone safe</h1>
      <p class="fon1">As we prioritize the safety and well-being of our teams, guests, and communities, face coverings will be required for guests who enter Cup o' Joe company-owned locations. Customers who are not wearing a face covering have alternate options to receive their order, including ordering at the drive-thru or order online on Joe's site. Those with underlying medical exemptions and young children are excluded from the requirement</p>
  </div>

  <div>
    <h1 class="fon">Coffee and Community fuel us.</h1>
    <p class="fon1">It’s how we start good days and gear up for late nights. It’s how we provide comfort, warmth and stamina, and now more than ever, it’s providing purpose. Your ongoing support and appreciation allow us to keep Joe open for business and our team’s livelihoods intact. As a local coffee company with deep roots and a strong community connection, we are infinitely grateful.  In return, we pledge to continue to serve you, our guests, safely and responsibly while giving back in our communities where we can.</p>
  </div>


<p style="font-family: 'Pacifico', cursive;font-size: 31px;font-weight: 600;padding-top: 50px;padding-bottom: 50px;" id="kgf">Though your experience visiting us may look a little different nowadays, we are here to serve you safely, responsibly, and with a smile — even if it’s under our face coverings.</p>
<p style="font-family: 'Pacifico', cursive;font-weight: 600;font-size: 40px;padding-bottom: 20px;" id="kgf1">LET’S KEEP EACH OTHER SAFE.</p></div>

<div class="container row1" id="kgf2">
  <div class="col-xl-6">
    <img src="{{ secure_asset('images/rule1.jpg') }}" style="width: 100%;padding-top: 30px;">
  </div>
  <div class="col-xl-6">
    <img src="{{ secure_asset('images/rule2.jpg') }}" style="width: 100%;padding-top: 30px;">
  </div>  
</div>


@extends('footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
    
    <script>        
        $(function () {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
         })
        })
    </script>
</html>