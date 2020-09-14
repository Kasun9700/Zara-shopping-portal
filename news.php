
<!DOCTYPE html>
<html>
<head>
	<title>News Letter</title>
	<meta charset="UTF-8">
	<link rel="icon" href="image/z.png">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="style.css">
    

	<style type="text/css">
		body{
			margin-top: 0px;
		}
		.login_container{
			min-width: 100%;
			min-height: 100vh;
			padding-top: 140px;
			
		}

		.loginn_card{
			min-width: 900px;
			max-width: 800px;
			min-height: 600px;
			max-height: 600px;
			background-color: transparent;
			
		}

		body {
  background-image: url('zzz.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 50% 105%;
}


.form-group {
  display: flex; }
  .form-group input {
    width: 50%; }
    .form-group input:first-child {
      margin-right: 25px; }

.form-wrapper {
  position: relative; }
  .form-wrapper i {
    position: absolute;
    bottom: 9px;
    right: 0; }

.form-control {
  border: 1px solid #333;
  border-top: none;
  border-right: none;
  border-left: none;
  display: block;
  width: 100%;
  height: 30px;
  padding: 0;
  margin-bottom: 25px; }
  
	</style>
</head>
<body>

	<?php
  require('nav.html');
  ?>



  
        <div class="login-box">
	    	<center>
	    		<div class="loginn_card"style=" padding-left: 200px; padding-right: 0px; padding-top: 30px; ">
	    			<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6); padding-bottom: 20px; padding-left: 123px; "><i class="fa fa-lock" aria-hidden="true"></i> News Letter</div>
                   <br> <p style="font-size: 18px; line-height: 21px; word-spacing: normal; padding-left: 123px; color: rgba(0,0,0,0.6)">Set up your news letter & onece a week you will recieve News & Information on Trends& Products.</p>
                   <br><br>
	    			<div style="max-width: 320px">
	    			<form method="post" action="auth.php" style=" width: 480px; height: 220px;">
					
					<div class="form-group">
						<input type="text" placeholder=" Name" class="form-control">
						<input type="text" placeholder="E-mail Address" class="form-control">
					</div>
	    				<br><br>
	    				<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" input type="submit" name="submit" value="LOG IN" style= "background: #d20039"> Subscribe </button>
	    			</form>
	    			
	    		</div>
	    	</center>
    	</div>
    



</body>
</html>