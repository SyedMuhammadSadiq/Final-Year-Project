



<?php
session_start();
 $conn = mysqli_connect("localhost", "root", "", "comfort_mart");
 // Code user Registration
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$password=md5($_POST['password']);
$query=mysqli_query($conn,"insert into user(name,email,contactno,password) values('$name','$email','$contactno','$password')");
if($query)
{
    echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}
// Code for User login
if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($conn,"SELECT * FROM user WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
 
  $_SESSION['email'] = $email;

    echo "<script>window.open('index.php?logged_in=You have_successfully_Logged_in!','_self')</script>";

  } else {
    
   
  echo "<script>alert('You Enter Wrong Email And Password')</script>";
    
} 

}
?>





<?php require('./autoload.php'); ?>
<?php include('layouts/header.php'); ?>




<!DOCTYPE html>
<html lang="en">
	
 <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

 
	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/blue.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		

		
<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/simple-line-icons.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>




<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>

<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "email_available.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>



	</head>
    <body class="cnt-home">
 
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="index.php">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	 
	<form class="register-form outer-top-xs" role="form" method="post">
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
		</div>
	  	<div class="form-group">
		    <label class="info-title" for=" ">Password <span>*</span></label>
		    <input type="password" class="form-control" id=" " name="password" required>
		</div>
		<!--<div class="radio outer-xs">
		  	 
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div>-->
	  	<button type="submit" name="login" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
 	<form class="register-form outer-top-xs" role="form" method="post"  name="register" onSubmit="return valid();">
         <div class="form-group">
            <label class="info-title" for="name">Name <span>*</span></label>
            <input type="text" class="form-control" id="name"  name="name" required>
        </div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control" id="email" name="email"  onBlur="userAvailability()" required>
            <span id="user-availability-status1" style="font-size:12px;"></span>
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="contactno">Contact Number <span>*</span></label>
		    <input type="text" class="form-control" id="contactno" name="contactno" maxlength="11" required>
		</div>
        <div class="form-group">
		    <label class="info-title" for="password">Password <span>*</span></label>
		    <input type="password" class="form-control"  id="password" name="password" required >
		</div>
         <div class="form-group">
		    <label class="info-title" for="confirmpassword">Confirm Password <span>*</span></label>
		    <input type="password" class="form-control"   id="confirmpassword" name="confirmpassword" required>
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
 
	<script src="assets/js/jquery-1.11.1.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script> 
<script src="assets/js/echo.min.js"></script> 
<script src="assets/js/jquery.easing-1.3.min.js"></script> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/jquery.rateit.min.js"></script> 
<script src="assets/js/bootstrap-select.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/scripts.js"></script>
	
	

	




</body>

 </html>
<?php include('layouts/footer.php'); ?>