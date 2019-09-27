<!DOCTYPE html>
<html>
<head>
	   <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      

		
		 <title>  Signin </title>

<style type="text/css">
.innerbox
{
   width:400px; /* or whatever width you want. */
   max-width:400px; /* or whatever width you want. */
   display: inline-block;
   padding: 15px;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.10);

}
</style>

</head>
<body>







											<!-- Sign-in -->
	<br> 
   <div class="container" >
   	  <div class="row">
	     <div class="col-md-12"> </div>

         <div class="col-md-4"></div>
		 	<div class="col-md-4">
		 	<form method="post" action="signin.php" class="innerbox">

				<h2 style="text-align: center;">Login</h2><br>
			    <label> Email Address </label>
			    <input type="email" name="email" placeholder="Email" class="form-control" required> <br>
			    <label> Password </label>
				<input type="password" name="password" placeholder="Password" class="form-control" required> <br>
				<button type="submit" class="btn btn-primary" name="login"> Login </button>
			    <p>Not yet a member? <a href="signup.php">Sign up</a></p> 

			</form>	
			</div>
		<div class="col-md-4"></div>

		</div>  
   </div>



      </div>
</div>


</body>
</html>






  <?php

// Code for User signin
  $conn = mysqli_connect("localhost", "root", "", "comfortmart");

if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query=mysqli_query($conn,"SELECT * FROM customer WHERE Customer_Email='$email' and Customer_Password='$password'");
	$num=mysqli_fetch_array($query);
	if(isset($num))
	{
		echo "<script>alert('You are successfully login');</script>";
	}
	else {
echo "<script>alert('you type incorrect email or password');</script>";	}

}

 ?> 
 



