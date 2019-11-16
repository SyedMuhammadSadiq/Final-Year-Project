  

	<?php 
		 include('include/db.php');
 		if(isset($_POST['submit']))
		{
		$old_pass=$_POST['current_password'];
		$new_pass=$_POST['new_password'];
		$re_pass=$_POST['confirm_password'];
		$get_pass=mysqli_query($conn, "SELECT admin_password from admin where admin_id='1'");
		$get_pass1=mysqli_fetch_array($get_pass);
		$data_pass=$get_pass1['admin_password'];
		if($data_pass==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysqli_query($conn,"UPDATE admin set admin_password='$new_pass' where admin_id='1'");
			echo "<script>alert('Update Password Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='change_password.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='change_password.php'</script>";
		}}
	?>














<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> </title> 
 



   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>			 



 <?php include('include/header.php');?>
<?php include('include/sidemenu.php');?> 

<br><br>
  <div class="main">
<form class="form-horizontal" method="POST"  enctype="multipart/form-data" >


<div class="form-group">
  <label class="col-md-4 control-label" >Current Password</label>  
  <div class="col-md-4">
  <input placeholder=" Enter Your Current Password" class="form-control input-md" name="current_password"  type="text" required>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" >New Password</label>  
  <div class="col-md-4">
  <input placeholder=" Enter Your New Password" class="form-control input-md" name="new_password"  type="text" required>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" >Re Enter New Password</label>  
  <div class="col-md-4">
  <input placeholder=" Re Enter Your New Password" class="form-control input-md" name="confirm_password"  type="text" required>
    
  </div>
</div>




<div class="form-group" >
   <div class="col-md-4 control-label" style="margin-left: 100px;">
     <button class="btn btn-primary control-label" name="submit" type="submit" >Submit</button>

    
  </div>
</div>
 
</form>
</div>

</body>
</html>


 

 
 
