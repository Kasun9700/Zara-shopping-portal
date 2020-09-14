<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Zara</title>
	<meta charset="UTF-8">
	<link rel="icon" href="image/z.png">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
 			$(".owl-carousel").owlCarousel();

		});


	</script>
	<style type="text/css">

body {
  background-image: url('back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
		.cat_list{
			font-family: 'Roboto', sans-serif;
			color: rgba(0,0,0,0.7);
			padding-top: 15px;
			padding-bottom: 15px;
			font-weight: 600;
			font-size: 11pt;
			border-bottom: 1px solid rgba(0,0,0,0.1);
		}

		.crd{
			min-width: 100%; 
			min-height: 400px; 
			box-shadow: 1px 1px 10px 3px rgba(0,0,0,0.1);
		}

		@keyframes groww {
	    	from {transform: scale(1);}
	    	to {transform: scale(1.04);}
	    }

		.crd:hover{
			animation-name: groww;
			animation-duration: 0.2s;
			animation-fill-mode: forwards;
			box-shadow: 4px 4px 20px 3px rgba(0,0,0,0.1);
		}
		.small_title{
		font-family: 'Roboto', sans-serif;
		font-size: 10pt;
		font-weight: 600;
		color: rgba(0,0,0,0.7);
		}

		.small_cont{
			font-family: 'Noto Sans', sans-serif;
			font-size: 10pt;
			color: rgba(0,0,0,0.4);
			font-weight: bold;

		}
</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<?php
  require('nav.html');
  ?>


<div class="inner_cont">
		<div class="container">
		<div class="row">
   			<div class="col-sm-3">
     			<img src="image/s1.jpg"><br>
    		</div>
   			<div class="col-sm-3">
      			<img src="image/s2.jpg"><br>
    		</div>
    		<div class="col-sm-3">
     			 <img src="image/s3.jpg"><br>
    		</div>
    		<div class="col-sm-3">
			<img src="image/s4.jpg"><br>
    		</div>
 		 </div>
 		 <br>
	</div>
    <div class="owl-carousel">
	<div><img src="images/2.jpg"></div>
		<div> <img src="images/1.jpg"> </div>
		<div><img src="images/3.jpg"></div>
		<div> <img src="images/4.jpg"> </div>
		
	</div>
	<br>
	<div class="title">BRANDS YOU LOVE</div>
	<br>
	<div class="container">
		<div class="row">
   			<div class="col-sm-4">
     			<img src="image/l1.jpg" style="width: 100%; height: auto"><br>
    		</div>
   			<div class="col-sm-4">
      			<img src="image/l2.jpg" style="width: 100%; height: auto"><br>
    		</div>
    		<div class="col-sm-4">
     			 <img src="image/l3.jpg" style="width: 100%; height: auto"><br>
    		</div>
 		 </div>
 		 <br><br>
 		 <div class="row">
   			<div class="col-sm-4">
     			<img src="image/l4.jpg" style="width: 100%; height: auto"><br>
    		</div>
   			<div class="col-sm-4">
      			<img src="image/l5.jpg" style="width: 100%; height: auto"><br>
    		</div>
    		<div class="col-sm-4">
     			 <img src="image/l6.jpg" style="width: 100%; height: auto"><br>
    		</div>
 		 </div>
	</div>
	<br>
</div>
<div class="cat_cont">
	<div class="inner_cat_cont"><a href="_add_product.php">
		<div class="title">ONLY THE BEST</div> 
		<div style="font-family: 'Noto Sans', sans-serif; font-size: 10pt; color: #5b5b5b">Popular categories that people are shopping for right now</div><br><br><br>
		<div class="container">
			<div class="row">
  				<div class="col-sm-6"><div class="crd"><div style="max-width: 50%; min-width: 50%; display: block; min-height: 400px; background:url(image/men.jpg) 50% 50%; background-size: cover; float: left;"></div><div style="max-width: 50%; min-width: 50%;display: block; background-color: #fff; min-height: 400px; float: right; padding-left: 20px; padding-top: 20px"><div style="font-family: 'Roboto', sans-serif; font-size: 12pt; font-weight: 900; color: rgba(0,0,0,0.8);">Men's Popular</div>
  				<br>
  				<div class="cat_list"><a href="product.php?item=tshirt&gender=men">T Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=casual_shirt&gender=men">Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=jeans&gender=men">Jeans</a></div>

  				</div></div></div>
  				<div class="col-sm-6"><div class="crd"><div style="max-width: 50%; min-width: 50%; display: block; min-height: 400px; background: url(image/women.jpg) 50% 50%; background-size: cover; float: left;"></div><div style="max-width: 50%; min-width: 50%;display: block; background-color: #fff; float: right; min-height: 400px; padding-left: 20px; padding-top: 20px"><div style="font-family: 'Roboto', sans-serif; font-size: 12pt; font-weight: 900; color: rgba(0,0,0,0.8);">Women's Popular</div>
  				<br>
  				<div class="cat_list"><a href="product.php?item=tshirt&gender=women">T Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=casual_shirt&gender=women">Shirt</a></div>
  				<div class="cat_list"><a href="product.php?item=jeans&gender=women">Jeans</a></div>
				  <br><br><br><br>	  
				  </div></div></div>
				 <div class="container">
				 <br><br><br><br>	  	<div class="row">
   			<div class="col-sm-3">
			   <img src="https://img.icons8.com/ios-filled/50/000000/privacy-policy.png"/> <a href="n/privacy-policy-en_WW-20200305.pdf">Privacy policy</a><br>
    		</div>
   			<div class="col-sm-3">
			   <img src="https://img.icons8.com/cute-clipart/64/000000/purchase-order.png"/> <a href="n/terms-and-conditions-en_WW-20200305.pdf">Purchase conditions</a><br>
    		</div>
    		<div class="col-sm-3">
			<img src="https://img.icons8.com/nolan/64/assignment-late.png"/> =<a href="n/legal notice.pdf">Legal notice</a>
			</div>
			<div class="col-sm-3">
			<img src="https://img.icons8.com/cute-clipart/64/000000/about.png"/> <a href="about.php">About us</a>
			</div>
			<div class="col-sm-3">
			<img src="https://img.icons8.com/cute-clipart/64/000000/ringing-phone.png"/> <a href="contactus.php">Contact us</a>
			</div>
			<div class="col-sm-3">
			<img src="https://img.icons8.com/cotton/64/000000/working-with-papers--v1.png"/> <a href="work-with.php">Work with us</a>
			</div>
			<div class="col-sm-3">
			<img src="https://img.icons8.com/nolan/64/work-from-home.png"/> <a href="zara/offices.html">Offices</a>
			</div>
			<div class="col-sm-3">
			<img src="https://img.icons8.com/nolan/64/google-news.png"/><a href="news.php">News Letter</a>
			</div>

 		</div> 
	    </div>
		</div>
		</div>
		<br><br>
	</div>
</div>


	<script type="text/javascript">
		var owl = $('.owl-carousel');
		owl.owlCarousel({
    		items:1,
    		margin:0,
    		loop:true,
    		autoplay:true,
    		autoplayTimeout:2000,
    		autoplayHoverPause:false
		});
    	owl.trigger('play.owl.autoplay',[2000])

	</script>

</body>
</html>