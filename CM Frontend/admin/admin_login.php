<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin</title>
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">

	<style type="text/css">
		
		@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');


background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 350px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}



.card-header h3{
color: white;
}

 

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

 
 

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.col-centered{
float: none;
margin: 0 auto;



}

 
	</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 style="text-align: center; padding: 15px;">Admin Login</h3>
				 
			</div>
			<div class="card-body">
				<form  method="post" action="admin_login.php" enctype="multipart/form-data">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input name="email" type="text" class="form-control" placeholder="Email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="Password">
					</div>
					 
					<div class="form-group">
						<input name="login" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			 
		</div>
	</div>
</div>
</body>
</html>





<?php

include('include/db.php');

if (isset($_POST['login'])) {

  echo  $email = mysqli_real_escape_string($conn, $_POST['email']);
  echo  $pass = mysqli_real_escape_string($conn, $_POST['password']);

  $query = "SELECT * from admin where admin_email='$email' AND admin_password='$pass'";

  $run_query = mysqli_query($conn, $query);
  $check_query = mysqli_num_rows($run_query);

  if ($check_query == 1) {

    $_SESSION['admin_email'] = $email;

    echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";

  } else {
    
   
  echo "<script>alert('You Enter Wrong Email And Password')</script>";
   //    echo 
   //  '<div class="col-md-3 col-centered">
   //  <div class="alert alert-danger">
   //  <strong>Password or Email</strong> is wrong <br> try again !
   //  </div>
   // </div>';

  }

}

?>

