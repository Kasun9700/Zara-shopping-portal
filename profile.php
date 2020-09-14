<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["user"])){
  header('Location: login.php');
}



$username=$_SESSION["user"];

$conn=mysqli_connect('localhost','root','','shopdb');

 if(!$conn ) {
      die('Could not connect');
   }
   
   $sql = 'SELECT * FROM users WHERE username="'.$username.'"';


      
   $retval = mysqli_query( $conn, $sql );
   
   if(! $retval) {
      die('Could not select data');
   }
   
  
 $row = mysqli_fetch_array($retval, MYSQLI_BOTH);

      $name=$row[0];
      $uname=$row[1];
      $pass=$row[2];
      $pic=$row[3];
      $gender=$row[4];
      $phone=$row[5];

   mysqli_close($conn);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<link rel="icon" href="image/z.png">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto:400,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
	   body{
      margin-top: 130px;
     }
    .profile_pic{
      min-height: 200px;
      max-height: 200px;
      min-width: 200px;
      max-width: 200px;
     
    }

    .contents{
      min-height: 450px;
      min-width: 100%;
     
    }
    .inner_cont4{
      width: 80%;

    }

    body {
  background-image: url('eee.jpg');
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

<div style="font-size: 20pt; padding-top: 50px; color: rgba(0,0,0,0.6); padding-bottom: 20px; padding-left: 1400px; "> Primary Information</div>
    <div class="inner_cont4" style=" width: 2900px; padding-top: 80px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-4" align="right">
            <div class="profile_pic" style=" background: url(dp/<?php echo $pic?>) 50% 50%; background-size: cover; box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.1)"></div>
            <span style="padding-left: 60px; font-size: 13pt; text-transform: uppercase; font-family: 'Roboto', sans-serif; color: rgba(0,0,0,0.6); font-weight: lighter;"><b><?php echo $_SESSION["name"];?></b></span>
          </div> <br>


          <div class="col-sm-8">
            <div class="contents">
             
              <hr>
              <table border="0" cellpadding="0" cellspacing="0" align="left" width="70%" height="250px" style="color: rgba(0,0,0,0.6);">
                <tr>
                  <td>Name : </td>
                  <td><b><?php echo $name; ?></b></td>
                </tr>
                <tr>
                  <td>Username : </td>
                  <td><?php echo $uname; ?></td>
                </tr>
                <tr>
                  <td>Gender : </td>
                  <td><?php echo $gender; ?></td>
                </tr>
                <tr>
                  <td>Phone : </td>
                  <td><?php echo $phone; ?></td>
                </tr>
                <tr>
                  <td colspan="2"><a href="edit_profile.php"><button class="btn btn-outline-info">Edit Profile</button></a> &nbsp <a href="orders.php"><button class="btn btn-outline-info">Track Order</button></a></td>
                </tr>
              </table>
              

            </div><br>

              
              <br><br>


          </div>

        </div>
      </div>
    </div>

    



</body>
</html>