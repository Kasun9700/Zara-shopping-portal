<?php
error_reporting(0);
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
		.register_container{
			min-width: 100%;
			min-height: 100vh;
			padding-top: 140px;
			
		}

		.register_card{
			min-width: 900px;
			max-width: 800px;
			min-height: 800px;
			max-height: 800px;
			background-color: transparent;
			
		}

		body {
  background-image: url('ccc.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 50% 100%;
}

	</style>

</head>
<body>

  <?php
  require('nav.html');
  ?>


  
    	<div class="login-box">
		<center>
	    		<div class="register_card" style=" padding-left: 200px; padding-right: 0px; padding-top: 50px; ">>
	    			<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6); padding-bottom: 20px; padding-left: 123px; "><i class="fa fa-lock" aria-hidden="true"></i> Register</div>

	    			<div style="max-width: 320px">
	    			<form method="post" action="register_script.php" style=" width: 436px; height: 400px;">

					<div class="textbox">
                    <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Name" required class="form-control" >
					</div>
					<div class="textbox">
                    <i class="fas fa-user"></i>
	    				<input type="text" name="username" placeholder="Username" required class="form-control">
					</div>
					<div class="textbox">
					<i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required class="form-control">
					</div>
					<div class="textbox">
					<i class="fas fa-lock"></i>
                        <input type="password" name="conf_password" placeholder="Confirm Password" required class="form-control" >
					</div>
					<div class="textbox">
                    <i class="fas fa-user"></i>
						<input type="number" name="phone" placeholder="Phone" required class="form-control">
					</div>
	    				<br>
	    				<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" input type="submit" name="submit" value="Sign Up" style= "background: #2479b5"> Sign Up </button>
	    			</form>
	    			<br><div style="font-size: 10pt; color: rgba(0,0,0,0.6); padding-left: 123px;">Have an account?  &nbsp <a href="login.php" style="color: rgba(0,0,0,0.6);">Login here</a></div>
	    			</div><br>
			
	    		</div>
	    	</center>
    	</div>
    



</body>
</html>