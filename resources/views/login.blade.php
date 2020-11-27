<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title> 
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"> 
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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
            } ?>     
    </ul>

    
  </div>
</nav>




  <div class="container">
    <div class="row1">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="loginsubmit" method="POST">
            {{@csrf_field()}}

              <div class="form-label-group">
                <input type="email" id="inputEmail" autocomplete="off" name="email" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Enter email</label>
              </div>
              
              

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}" style="padding-left: 34px; padding-bottom: 15px;"></div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Login</button>
              <a class="d-block text-center mt-2 small" href="signup">Create a account?</a>
              <hr class="my-4">
              <div style="text-align: center;">
              <span>{{session('error')}}</span>
              @if($errors->has('g-recaptcha-response'))
              <span>{{$errors->first('g-recaptcha-response')}}</span>
              @endif
                

           </div>


              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  @extends('footer')

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
            $(window).bind("resize", function () {
            console.log($(this).width())
            if ($(this).width() < 415) {
                $('.card-body').removeClass('card-body').addClass('card-body container')
            } else {
                $('.card-body').removeClass('card-body container').addClass('card-body')
            }
            }).trigger('resize');


          $(function () {
          'use strict'

          $('[data-toggle="offcanvas"]').on('click', function () {
          $('.offcanvas-collapse').toggleClass('open')
           })
          })
    </script>
</html>