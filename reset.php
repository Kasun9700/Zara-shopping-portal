<?php
error_reporting(0);
session_start();

if(isset($_SESSION["user"])){
  header("Location: profile.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
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
  background-image: url('ppp.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 50% 107%;
}



	</style>

  <script type="text/javascript">
    <?php
      if(isset($_GET["e"])){
        if($_GET["e"]==1){
          echo "alert('The username or password is incorrect.')";
        }

        if($_GET["e"]==2){
          echo "alert('You are sucessfully registered, Please login to continue.')";
        }

        if($_GET["e"]==3){
          echo "alert('Some error occured.')";
        }
      }
    ?>
  </script>
</head>
<body>

	<?php
  require('nav.html');
  ?>



  
        <div class="login-box">
	    	<center>
	    		<div class="loginn_card"style=" padding-left: 200px; padding-right: 0px; padding-top: 50px; ">
	    			<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6); padding-bottom: 20px; padding-left: 123px; "><i class="fa fa-lock" aria-hidden="true"></i> Reset Password</div>

	    			<div style="max-width: 320px">
	    			<form method="post" action="auth.php" style=" width: 436px; height: 220px;">
					<div class="textbox">
					<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Current Password" required class="form-control">
					</div>
                    <div class="textbox">
					<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="New Password" required class="form-control">
					</div>
					<div class="textbox">
					<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Confirm Password" required class="form-control">
					</div>
	    				<br><br>
	    				<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"  style= "background: #2479b5"><a href="login.php"> Reset Password </button>
	    			</form>
	    			
			
	    		</div>
	    	</center>
    	</div>
    



</body>
</html>