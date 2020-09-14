<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>About</title>
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
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		$(document).ready(function(){
 			$(".owl-carousel").owlCarousel();
		});
	</script>
	<style type="text/css">
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
        body {
  background-image: url('vvv.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

body{
			margin-top: 100px;
		}
		.register_container{
			min-width: 100%;
			min-height: 100vh;
			padding-top: 140px;
			
		}

		.register_card{
			min-width: 800px;
			max-width: 800px;
			min-height: 200px;
			max-height: 800px;
			background-color: transparent;	
		}

</style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<?php
  require('nav.html');
  ?>

<div class="login-box">
		<center>
	    		<div class="register_card" style=" padding-left: 150px; padding-right: 0px; padding-top: 50px; ">
                   
                    <div class="espot-content content-test" style="font-size: 16px; line-height: 18.2px; word-spacing: normal;">

<header role="presentation" style="font-size: 16px; line-height: 18.2px; word-spacing: normal;">

</header>
<article class="more-info-content" style="font-size: 16px; line-height: 21px; word-spacing: normal; padding-left: 80px; padding-top: 20; width:800px;">

	<p style="font-size: 16px; line-height: 21px; word-spacing: normal; color: rgba(0,0,0,0.6)">Zara is one of the largest international fashion companies. It belongs to Inditex, one of the world’s largest distribution groups.</p>
	<p style="font-size: 16px; line-height: 21px; word-spacing: normal; color: rgba(0,0,0,0.6)" >The customer is at the heart of our unique business model, which includes design, production, distribution and sales through our extensive retail network.</p>
	
	<p style="font-size: 16px; line-height: 21px; word-spacing: normal;  color: rgba(0,0,0,0.6)">For more information, please visit the Inditex Group website: <a href="http://www.inditex.com" target="_blank" class="underline" style="font-size: 14px; line-height: 21px; word-spacing: normal;">www.inditex.com</a></p>
	 
    
	
</article>
</div>


         </center>
</div>
