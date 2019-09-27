<!DOCTYPE html>
<html>
<head>
	   <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      

		
		 <title> Signup </title>
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
   <div class="container">
   	  <div class="row">
	     <div class="col-md-12"> </div>

         <div class="col-md-4"></div>
		 	<div class="col-md-4">
	    	
			<form method="post" action="signup.php" class="innerbox">

					<h2 style="text-align: center;">Create new account</h2><br>
			    	<label> Full Name </label> <br>
			    	<input type="text" name="fullname" placeholder="Name" class="form-control"  required> <br>
			    	<label >Email Address</label> <br>
			    	<input type="email" name="emailid" placeholder="Email" class="form-control" required> <br>
			  		<label>Contact No.</label> <br>
			    	<input type="text" name="contactno" placeholder="ContactNo" class="form-control" required> <br>
			  		<label>Password.</label> <br>
			    	<input type="password" name="password" placeholder="Password" class="form-control" required> <br>
			    	<label>Confirm Password.</label> <br>
			    	<input type="password" name="confirmpassword" placeholder="ConfirmPassword" class="form-control" required> <br>
			    	<button type="submit" class="btn btn-primary" name="submit">Sign Up</button> <br>
			    	<p> Already a member? <a href="signin.php">login</a></p> 
			</form>
		    </div>
         <div class="col-md-4"></div>


		 
 	  </div>
 	  <br> <br>
      </div>
</div>
</div>

</body>
</html>






 <?php
//code for user signup

  $conn = mysqli_connect("localhost", "root", "", "comfortmart");

if(isset($_POST['submit']))
		{
			$name=$_POST['fullname'];
			$email=$_POST['emailid'];
			$contactno=$_POST['contactno'];
			$password=$_POST['password'];
			 
 		if($_POST['password'] == $_POST['confirmpassword']) 
 		{
			$query=mysqli_query($conn,"insert into customer(Customer_name,Customer_Email,Customer_Number,Customer_Password) values('$name','$email','$contactno','$password' )");
			 
 
				if($query)
					{
						echo "<script>alert('You are successfully register');</script>";
					}
				else 
					{
					echo "<script>alert('Not register');</script>";
					}
		} else
			{ echo "<script>alert('password and confirm password is not match');</script>"; }

		}
 


 ?> 
 



