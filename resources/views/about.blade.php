<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    
    
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
    
    
    <div class="sr">   
    

    <div id="ab">
        <div class="container1"> 

            <h1 style="text-shadow: 2px 2px 5px red; text-align: center;" class="an">About Us</h1>
            <p  class="color" style="font-family: 'Great Vibes', cursive;">Everything is beautiful with coffee <i style="font-size: 35px;" class="fas fa-coffee fa-3x"></i> </p>
        
            <p class="ac">Founded on Good Food, Great Service and Excellent Coffee, The Coffee Club experience is more than just a transaction, it’s a moment made for you. Today we aim to become the world’s most loved and relevant café chain. From the very beginning, The Coffee Club was founded on family, friends and customer need. The founding idea was to create a place that was more than just somewhere for people to meet for coffee; it would be more casual, comfortable yet sophisticated, stylish yet affordable. The Coffee Club has established itself as an iconic household name and preferred venue for millions of coffee drinkers throughout the Maharashtra. We now employ more than 2,000 employees and serve more than 1 million coffees annually. Despite our name, The Coffee Club is about much more than just excellent coffee. </p>

            <p class="ac">With cooperative efforts to promote more socially responsible corporate policies, The Coffee Club is constantly offering support and funding to local communities and schools and contributing to environmental initiatives. From the feeling of your first sip coffee in the morning, to the joy of sharing a laugh over a meal with best friends, to a moment of pure indulgence as you take that first bite of heavenly chocolate cake, it all starts with a feeling. It is your happy place and it all takes place at The Coffee Club. Your happy place.
            </p>   
            <p>&nbsp;</p>       
        </div>       
   </div>
   </div>

<div id="val">
    <div class="con2">
        <h1 style="text-align: center; padding-bottom: 10px; text-shadow: 2px 2px 5px red;">Vision,Mission,Values</h1>
        <div class="cont3" id="val1">
           
            <h3 style="text-align: center; text-shadow: 2px 2px 8px blue;">Our Vision</h3>
            <p>To remain the leading café chain in Singapore, offering gourmet food and coffee with excellent service.</p>
            <p>&nbsp;</p>
            
            <h3 style="text-align: center; text-shadow: 2px 2px 8px blue;">Our Mission</h3>
            <p>Continuous innovation and an obsession with quality products remain the&nbsp; key to our heritage.&nbsp; Exceeding customers’ expectations is achieved through&nbsp; passionate staff and a dedication to reaching new standards. Along with&nbsp; gourmet food and coffee, we aim to bring customers the ultimate café dining&nbsp; experience in a contemporary, comfortable and energetic atmosphere.</p>    
                         
            <h3 style="text-align: center; text-shadow: 2px 2px 8px blue;">Our Values</h3>
            <ul>
                <li>We demonstrate a commitment to innovation and excellence in every aspect</li>
                <li>We respect and care for our customers by offering the highest in quality products and services</li>
                <li>We understand that our partnerships are based on integrity and trust</li>
                <li>We respect and believe in our people, with continuous meticulous skill development programmes, charting a viable career path for our people</li>
            </ul>
        </div>
        
    </div>    
</div>


<div id="za">
    <div class="branch">
         <h1 class="colorchange">Branches</h1>
        
        <div class="gallery">
            <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="shop1"> 
            <div class="desc">Mumbai</div>    
        </div>
       
        <div class="gallery">
            <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="shop2">
            <div class="desc">Thane</div>  
        </div>
        
        <div class="gallery">
            <img src="https://images.unsplash.com/photo-1497644083578-611b798c60f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="shop3">
            <div class="desc">Pune</div>    
        </div>
        
        <div class="gallery">
            <img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="shop4">
            <div class="desc">Satara</div>   
        </div>
        
        
       
    </div>
</div>

</div>
@extends('footer')
 <script type="text/javascript">
        function slideshow(){
            var x = document.getElementById('check-class');
            if(x.style.display === "none"){
                x.style.display="block";
            }else{
                x.style.display="none"
            }

        }
    </script>

</body>
</html>