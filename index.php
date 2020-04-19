<?php 
	session_start();
	if(isset($_SESSION["uname"])){
		header('location:main.php');

	}

 ?>


<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
    function chk(i)
{
  b=document.getElementById("b");
  if(i.checked)
  {
    b.disabled=false;
  }
  else
  {
    b.disabled=true;
  }
}
  </script>
  <link rel="icon" href="logo.png" type="image/icon type">
	<title>Private Space</title>
  <!--stylesheets-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">

    <script src="jquery/jquery.min.js"></script>
    <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!---- boostrap.min link local ----->
    
    <link rel="stylesheet" href="css/style.css">
    <!---- boostrap.min link local ----->

    <script src="js/bootstrap.min.js"></script>
    <!---- Boostrap js link local ----->
    
    <link rel="icon" href="images/icon.png" type="image/x-icon" />
    <!---- Icon link local ----->
    
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!---- Font awesom link local ----->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Private Space</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
      <!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>-->
    </ul>
  </div>
</nav><br><br><br>
  <div class="container-fluid" style="margin-top: -2%;">
    <div class="container">
      <h2 class="text-center" id="title">Welcome to Private Space</h2>
      <h3 class="text-center" id="title">Login or signup to create or join a group</h3>
      <hr>
      <div class="row">
        <div class="col-md-5">
          <form role="form" method="post" action="signup.php" enctype="multipart/form-data">
            <fieldset>              
              <p class="text-uppercase pull-center"> SIGN UP.</p> 
              <div class="form-group">
                <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="Full name" required>
              </div>
              <div class="form-group">
                <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="Username" required>
              </div>

              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
                <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              </div>
              <div class="form-group">
                <input type="number" name="age" id="age" class="form-control input-lg" placeholder="Age" pattern="[0-9]" required>
              </div>

              <div class="form-group">
                <input type="file" name="dp" id="dp" class="form-control input-lg" placeholder="Insert Image" required>
              </div>

              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" onclick="chk(this)" required>
                  By Clicking register you agree to our <a href="#">policy & terms</a>
                </label>
                </div>
              <div>
                    <input type="submit" id="b" class="btn btn-lg btn-primary" disabled=""  value="Register">
              </div>
            </fieldset>
          </form>
        </div>
        
        <div class="col-md-2">
          <!-------null------>
        </div>
        
        <div class="col-md-5">
            <form role="form" method="post" action="login.php">
            <fieldset>              
              <p class="text-uppercase"> Login using your account: </p> 
                
              <div class="form-group">
                <input type="text" name="uname" id="uname" class="form-control input-lg" placeholder="Username" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" class="btn btn-md btn-primary" value="Sign In" style="background-color: ">
              </div>
                 
            </fieldset>
        </form> 
        </div>
      </div>
    </div>
  </div>
</section><br>
<!--Footer-->
<footer class="section footer-classic context-dark bg-image" style="background:#eee;">
        <div class="container1">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <h2 style="margin-top: -7%;">Information</h2>
                <a href="aboutus.php">About Us</a><br>
                <a href="contactus.php">Contact Us</a>
              </div>
            </div>
            <!--<div class="col-md-4">
              <h2>My Account</h2>
              <a href="login.php">Login</a><br>
              <a href="signup.php">Sign Up</a>
            </div>-->
            <div class="col-md-4 col-xl-3">
              <h2>Contact Us</h2>
              <p>Contact:+91-934-8372640</p>
            </div>
          </div>
        </div>
      </footer>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
