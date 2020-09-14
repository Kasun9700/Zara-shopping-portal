<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
  background-image: url('ttt.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 50% 107%;
}

.contact-section .form-control{
  border: 1px solid  #2fbfbc;
  border-top: none;
  border-left: none;
  border-right: none;
  box-shadow: none;
}

h2 {
  font-family: 'Raleway', sans-serif;
  font-weight: 900;
  color: #101f1d;
  font-size: 35px;
  letter-spacing: 1.25px;
  margin-top: 0;
}
.contact-fields {
  padding: 40px 0 0;
}
.phone {
  padding-top: 50px;
}
.phone,
.email,
.working-hours {
  margin-bottom:30px;
}
.phone a,
.email a,
.location a {
  color: #fd4f00;
  font-size:18px;
}
.contact-h2 {
  color: #fd4f00;
  padding-top:20px;
}
.contact-fields .form-group {
  margin-bottom: 35px;
}
.contact-info {
  margin-top: -40px;
}
.contact-fields .form-group input,
.contact-fields .form-group textarea {
  font-size: 16px;
}
.location a.btn.btn-accent {
  padding: 12px 26px 10px;
  margin-top: 30px;
  font-size: 16px;
}
.location a.btn.btn-accent img {
  margin-right: 20px;
}
.location hr {
  margin-bottom: 10px;
}
.btn {
  font-size: 15px;
  padding: 22px 46px 18px;
  line-height: 1;
  text-transform: uppercase;
  border: none;
  border-radius: 0;
  position: relative;
  letter-spacing: 0.3px;
}
.btn.btn-accent {
  background: #2fbfbc;
  color: white;
}
.btn.btn-accent:hover {
  background: #269694;
}
.ct-newsletter-section .container {
  width: 100%;
  max-width: 1360px;
}
.ct-section-head,
.ct-section-header {
  font-family: 'Raleway', sans-serif;
  font-weight: 900;
  color: #101f1d;
  font-size: 35px;
  text-transform: uppercase;
  padding-top: 45px;
  letter-spacing: 1.25px;
  margin-bottom: 5px;
}
.ct-section-header {
  text-align: center;
}
.ct-newsletter-inline {
  display: table;
  width: 100%;
  color: white;
  margin: 69px 0 138px;
  text-align: center;
}
.ct-newsletter-inline__facebook {
  background-color: #3b5997;
}
.ct-newsletter-inline__facebook, .ct-newsletter-inline__twitter {
  width: 16%;
}
a {
  -webkit-transition: all 250ms cubic-bezier(0.55, 0, 0.1, 1);
  transition: all 250ms cubic-bezier(0.55, 0, 0.1, 1);
}
.ct-newsletter-inline__facebook i, .ct-newsletter-inline__twitter i {
  font-size: 109px;
  padding-top: 25px;
}

.ct-newsletter-inline__twitter {
  background-color: #2fc2ee;
}
.ct-newsletter-inline__facebook, 
.ct-newsletter-inline__twitter {
  width: 16%;
  padding-top: 25px;
}
.ct-newsletter-inline__form {
  background-color: #fd4f00;
  padding: 24px;
}
.ct-newsletter-inline__form .ct-newsletter {
  text-align: left;
  width: 100%;
  max-width: 668px;
  margin: 0px auto;
}
.ct-newsletter-inline__form .form-inline {
  display: table;
  width: 100%;
  height: 50px;
}
.ct-newsletter-inline__form .form-inline input {
  width: 50%;
  width: calc(100% - 137px);
  padding: 0 40px;
  font-size: 16px;
  letter-spacing: 0.3px;
  color: #111f1d;
  text-transform: uppercase;
}
.ct-newsletter-inline__form .form-inline input, 
.ct-newsletter-inline__form .form-inline .btn {
  display: table-cell;
  vertical-align: middle;
  height: 65px;
  border: none;
  margin: 0;
}
.ct-newsletter-inline__form .form-inline .btn {
  width: 137px;
  font-family: 'Oswald', sans-serif;
  font-size: 25px;
  padding-left: 0;
  padding-right: 3px;
  text-align: center;
}
.ct-newsletter-inline__form .form-inline input, .ct-newsletter-inline__form .form-inline .btn {
  display: table-cell;
  vertical-align: middle;
  height: 50px;
  border: none;
  margin: 0;
}
.btn.btn-dark {
  background: #111f1d;
  color: white;
}
.btn {
  font-size: 15px;
  padding: 22px 46px 18px;
  line-height: 1;
  text-transform: uppercase;
  border: none;
  border-radius: 0;
  position: relative;
  letter-spacing: 0.3px;
}
@media screen and (min-width: 980px) {
  .contact-info {
    padding-left: 110px;
  }
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
  
  <div class="container" style="padding-top: 120px;">
  <div class="contact-section"  style="padding-top: 50px;">
    <h2 class="ct-section-head" style="padding-left: 800px; padding-top: 30px;">CONTACT US</h2>
    <div class="row contact-fields" style="padding-left: 600px; padding-top: 70px; width: 1500px;">
      <div class="col-md-8 left-form">
       <form method="post" action="">
        <div class="form-group">
          <label class="sr-only" for="fname">First Name *</label>
          <input class="required form-control" id="fname" name="fname" placeholder="First Name&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="lname">Last Name *</label>
          <input class="required form-control" id="lname" name="lname" placeholder="Last Name&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="contactEmail">Email *</label>
          <input class="required form-control h5-email" id="contactEmail" name="contactEmail" placeholder="Email&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="contactPhone">Phone *</label>
          <input class="required form-control h5-phone" id="contactPhone" name="contactPhone" placeholder="Phone&nbsp;*" type="text"  required>
        </div>
        <div class="form-group">
          <label class="sr-only" for="comment">Type your message here</label>
          <textarea class="required form-control" id="comment" name="comment" placeholder="Type your message here&nbsp;*" rows="6" required></textarea>
        </div>
        <button class="btn btn-accent" type="submit">Submit</button>  
      </form>
    </div>
    <div class="col-md-4 contact-info" style=" height: 646px; padding-top: 70px; ">
    <div class="email">
        <h2>Offices</h2>
        <a style="font-size: 14px; line-height: 24px; word-spacing: normal;"> Inditex building
           Avenida de la Diputación s / n
           15142 Arteixo, A Coruña, Spain</a>
      </div>
      <div class="email">
        <h2>Email</h2>
        <a href="mailto:info@webcorpco.com">info@zara.com</a>
	  </div>
	  
      <div class="location">
        <h2>Visit</h2>
        <a href="https://www.facebook.com/ZARACare" target="_blank" style="font-size: 14px; line-height: 24px; word-spacing: normal;">ZARACare</a></br>
        <a href="http://twitter.com/ZARA_Care" target="_blank" style="font-size: 14px; line-height: 24px; word-spacing: normal;">@Zara_care</a>
        </div>
    </div>
  </div>
</div>
  </div>
	</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
