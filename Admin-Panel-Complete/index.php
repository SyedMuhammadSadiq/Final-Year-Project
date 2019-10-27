<?php
session_start();
if (!isset($_SESSION['admin_email'])) {
  echo "<script>window.open('admin_login.php?not_admin=You are not an Admin!','_self')</script>";
} else {
  ?>
   <?php include('include/db.php');  ?>

   


<!DOCTYPE html>
<html lang="en">
<head>
  <title ></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 
-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		 


 
</head>
<body>

<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?>

 

  
</body>
</html>


  <?php } ?>

















