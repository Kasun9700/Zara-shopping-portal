<?php
error_reporting(0);
session_start();

if(!isset($_SESSION["user"])){
  header("Location: login.php");
}

if(isset($_POST["name"]) && isset($_POST["gender"]) && isset($_POST["phone"]) && isset($_FILES['file']['name'])){

$name=$_POST["name"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];



$fname = $_FILES['file']['name'];
$fsize = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
$location = 'dp/';

$md5 = md5($fname.$fsize.$type);

$title = md5($md5);

$newname = $title.".jpg";

if(isset($fname)){
  if(!empty($fname)){
    move_uploaded_file($tmp_name, $location.$newname);
  }
}




$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn) {
      die('Could not connect');
   }
   
   $sql="UPDATE users SET name='$name',gender='$gender',picture='$newname', phone='$phone' WHERE username='".$_SESSION["user"]."'";



   $retval = mysqli_query( $conn, $sql );
   
   if(!$retval) {
      die('Could not update data');
   }
   
  
   
   mysqli_close($conn);

   header("Location: profile.php");
   die();
   }



?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
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
      margin-top: 130px;
     }

     body {
  background-image: url('ddd.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 50% 100%;
}


    .profile_pic{
      min-height: 200px;
      max-height: 200px;
      min-width: 200px;
      max-width: 200px;
    
    }

    
		.login_container{
			min-width: 50%;
			min-height: 100vh;
			padding-top: 140px;
			
		}

		.loginn_card{
			min-width: 900px;
			max-width: 800px;
			min-height: 200px;
			max-height: 800px;
			background-color: transparent;
			
		}
 
	</style>
</head>
<body>

	<?php
  require('nav.html');
  ?>


<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6);  padding-left: 1400px; "> Update Profile</div>
    <div class="inner_cont4" style=" width: 2900px; ">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="profile_pic" style="float:right; font-size: 10pt; padding-top: 50%; padding-left: 10px; padding-right: 10px">Upload profile Picture <br><br><form enctype="multipart/form-data" action="edit_profile.php" method="post"><input type="file" name="file" ></div><br>
          </div>


	    	<center>
        <div class="loginn_card"style=" padding-left: 400px; padding-right: 0px; ">
          <div class="textbox">
                    <i class="fas fa-user"></i>
						<input type="text" name="name" placeholder="name" required class="form-control" >
					</div><br><br>
                  <td> </td>
                  <td><select name="gender" required class="form-control" style="padding-right: 10px"><option>Male</option><option>Female</option></select></td>
                </tr><br>
                <tr>
                <div class="textbox">
                    <i class="fas fa-user"></i>
						<input type="number" name="phone" placeholder="phone" required class="form-control" >
					</div><br><br>
                <tr>
                  <td colspan="2" style=" padding-left: 43px;"><input type="submit" name="" class="btn btn-outline-info" value="save" style="width: 400px;"></form></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    



</body>
</html>