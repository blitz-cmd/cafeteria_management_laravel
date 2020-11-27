<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Order Now</title>
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/order.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
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





<div style="color:red;">  
  <marquee behavior="scroll" direction="left" >Check out latest covid-19 status in your area before ordering. Delivery time may vary according to restriction in your area. Maharshtra:<span id="data1"></span>,  Mumbai:<span id="data2"></span>,  Pune:<span id="data3"></span>,  Thane:<span id="data4"></span>,  Satara:<span id="data5"></span></marquee>
</div>


<div  class="container" style="text-align: center;background-color: white;"><br><br><h1 style="font-family: 'Sansita Swashed', cursive;word-spacing: 50px;font-size: 50px;">ORDER    NOW</h1><br><hr style="width: 60%;border-width: 4px;"><br>
<p style="text-align: left;font-family: 'Oswald', sans-serif;font-size: 34px;">Menu</p><br>
</div>

<form action="ordersubmit" method="POST">
{{@csrf_field()}}
<div id="ssd" class="container row1 justify-content-around" >

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1 brrd1" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR_iLAsI4Frs-JCyuOn3YzTOj-W-d5Iul8V4A&usqp=CAU">
		<div class="container" style="padding-bottom:20px;"><p class="yep"><?php $a1='AFFOGATO';echo $a1;?></p>
		<p class="yep1">Italian coffee-based dessert. Espresso poured on a vanilla ice cream. Served in a cappuccino cup.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o1"><?php $o1=200;echo $o1;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo1">0</span></p>
			<select name="n1" id="n1" onchange="sc1(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://www.irishtimes.com/polopoly_fs/1.4029828.1569402836!/image/image.jpg_gen/derivatives/box_620_330/image.jpg">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a2='AMERICANO';echo $a2;?></p>
		<p class="yep1">Espresso with added hot water. Often served in a cappuccino cup but different from brewed coffee.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o2"><?php $o2=200;echo $o2;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo2">0</span></p>
			<select name="n2" id="n2" onchange="sc2(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Caffe-Latte-Prague.JPG/1200px-Caffe-Latte-Prague.JPG">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a3='CAFFÈ LATTE';echo $a3;?></p>
		<p class="yep1">An espresso with steamed milk and only a little milk foam poured over it. Serve in a latte glass.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o3"><?php $o3=200;echo $o3;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo3">0</span></p>
			<select name="n3" id="n3" onchange="sc3(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://athome.starbucks.com/sites/default/files/2020-07/CaffeMocha_Header_Desktop_1176x712.jpg">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a4='CAFFÈ MOCHA';echo $a4;?></p>
		<p class="yep1">A caffè latte with chocolate and whipped cream, made by pouring chocolate sauce, followed by an espresso shot.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o4"><?php $o4=200;echo $o4;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo4">0</span></p>
			<select name="n4" id="n4" onchange="sc4(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://www.thespruceeats.com/thmb/x9oBX7GRB9nVh3xCNp0AMT0ol5c=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/cappuccino-with-cocoa-powder-in-a-coffee-shop-696828002-5a8cdd4030371300379a59fd.jpg">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a5='CAPPUCCINO';echo $a5;?></p>
		<p class="yep1">A coffee drink consisting of espresso and a milk foam mixture. Served in a cappuccino cup.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o5"><?php $o5=200;echo $o5;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo5">0</span></p>
			<select name="n5" id="n5" onchange="sc5(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://s.abcnews.com/images/Lifestyle/ht_starbucks_kab_150105_16x9_992.jpg">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a6='FLAT WHITE';echo $a6;?></p>
		<p class="yep1">A coffee drink with a double espresso and lightly frosted milk.Usually served in a glass.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o6"><?php $o6=200;echo $o6;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo6">0</span></p>
			<select name="n6" id="n6" onchange="sc6(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://cdn-0.smallbiztrends.com/wp-content/uploads/2019/04/Freakshake.png?ezimgfmt=ng:webp/ngcb8">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a7='FREAKSHAKE';echo $a7;?></p>
		<p class="yep1">Basically anything that is blended with various topping. Freakshakes are made with cold brew coffee.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o7"><?php $o7=200;echo $o7;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo7">0</span></p>
			<select name="n7" id="n7" onchange="sc7(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="https://www.koobiescoffee.com/wp-content/uploads/2019/09/frappe.jpg">
		<div class="container" style="padding-bottom:20px;"><p  class="yep"><?php $a8='FRAPPÉ';echo $a8;?></p>
		<p class="yep1">Rich iced coffee made of espresso, milk and ice. Mixed in a blender and served for example in a latte glass.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o8"><?php $o8=200;echo $o8;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo8">0</span></p>
			<select name="n8" id="n8" onchange="sc8(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

	<div class="col-xl-4 col-lg-6 col-md-12 brd">
		<div class="col-xl-10 col-lg-10 col-md-10 brd2">
		<img class="brd1" src="http://www.feathersinournest.com/wp-content/uploads/2015/06/iced-mocha-2.jpg">
		<div class="container" style="padding-bottom: 20px;"><p  class="yep"><?php $a9='ICED MOCHA';echo $a9;?></p>
		<p class="yep1">Cold Caffè mocha. Prepared like iced latte, but garnished and flavoured like caffè mocha.</p>
		<p style="color: blue;font-size: 20px;">₹.<span id="o9"><?php $o9=200;echo $o9;?></span></p>
		<p>Quantity</p> <p style="display: inline;float: right;font-size: 20px;">₹.<span id="oo9">0</span></p>
			<select name="n9" id="n9" onchange="sc9(this.value);">
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			</select>
		</div></div>		
	</div>

<h1>₹.<span id="tot">0</span></h1>
<span style="font-size: 24px;color: red;letter-spacing: -2px;">{{session('error')}}</span>

	<button class="btn btn-primary" type="submit" name="order">Order Now</button>

</div>
</form>


@extends('footer')

<script type="text/javascript" src="{{ asset('js/order.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
@extends('api')
<script>        
        $(function () {
        'use strict'
        $('[data-toggle="offcanvas"]').on('click', function () {
        $('.offcanvas-collapse').toggleClass('open')
         })
        })
    </script>
</html>




    
    
