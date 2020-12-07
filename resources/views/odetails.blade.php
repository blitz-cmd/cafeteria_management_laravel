<!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Order Details</title>  
  <link rel="shortcut icon" type="image/png" href="{{ secure_asset('images/favicon.png') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/footer.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ secure_asset('css/odetails.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">
  <!-- Custom styles for this template -->
  <link href="form-validation.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  </head>
<body class="bg-light">

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
              echo '<li class="nav-item">
              <a class="nav-link dep" href="#">Welcome '.session('username').'</a>
              </li>';
              echo '<li class="nav-item">
              <a class="nav-link dep" href="logout">Logout</a>
              </li>';
              ?>         
    </ul>

    
  </div>
</nav>





    <div class="container">
  <div class="py-5 text-center">
    <h2>Checkout form</h2>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{session('oquantity')}}</span>
      </h4>
      <ul class="list-group mb-3">
        
      <?php
          $iid=session('oid');
          // $iid="#idW9OcDHn2";
          
          for($x=1;$x<10;$x++){
            $q1=null;
            $name="name".$x;
            $price="price".$x;
            $quantity="quantity".$x;
            $query=DB::select("select ".$name." from orderhistory where id = ?", [$iid]);
            foreach($query as $query){
              $q1= $query->$name;
            }
            $query=DB::select("select ".$price." from orderhistory where id = ?", [$iid]);
            foreach($query as $query){
              $qq2= $query->$price;
            }
            $query=DB::select("select ".$quantity." from orderhistory where id = ?", [$iid]);
            foreach($query as $query){
              $qqq2= $query->$quantity;
            }
            if($q1!=null){          
              echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
              <h6 class="my-0">'.$q1.'</h6>                  
              </div><span>
              <span class="text-muted">₹.'.$qq2.'</span>
              <span class="text-muted" style="padding-left:50px;">x'.$qqq2.'</span><Span>
              </li>';
          }
          }

        ?>


        <li class="list-group-item d-flex justify-content-between">
          <span><strong>Total </strong></span>
          <strong>₹.{{session('sum')}}</strong>
        </li>

      </ul>

    </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" action="odetailssubmit" method="POST">
      {{@csrf_field()}}
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="firstName">Name</label>
            <input type="text" class="form-control" autocomplete="off" id="firstName" placeholder="Full Name" name="name" required>
            <div class="invalid-feedback">
              Valid name is required.
            </div>
          </div>
          
        </div>

        

        <div class="mb-3">
          <label for="address">Address</label>
          <textarea class="form-control" rows="3" autocomplete="off" name="address" id="address" placeholder="Full Address" required></textarea>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio"  class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
              
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" autocomplete="off" name="cname" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Card number</label>
            <input type="text" class="form-control" autocomplete="off" name="cno" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" autocomplete="off" name="exp" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" autocomplete="off" name="cvv" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="continue" type="submit">Continue to checkout</button>        
      </form>
      <form action="odetailsdelete" method="POST">
      {{@csrf_field()}}
      <hr class="mb-0">
      <button class="btn btn-danger btn-lg btn-block" name="delete" type="submit">Delete orders</button>
      </form>
    </div>
  </div>  
</div>
@extends('footer')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<!-- <script src="form-validation.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<script>   
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
  }, false)
})()


        $(function () {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
         })
        })
    </script>
</html>
