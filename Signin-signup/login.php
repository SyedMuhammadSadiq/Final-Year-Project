<?php

require('../config/connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD']== "POST") {

		$username = mysqli_real_escape_string($connection, $_POST['Customer_Email']);
 		$password = mysqli_real_escape_string($connection, $_POST['Customer_Password']);
 		$password = md5($password);
 		$sql = "SELECT * FROM customer WHERE Customer_Email='$username' AND Customer_Password='$password'";
 		$query = mysqli_query($connection, $sql);
 		$res=mysqli_num_rows($query);
 
 		if($res == 1) {
 			header("Location: ../welcome.php");
 		}
 		else {
 			echo "Invalid Username or Password";
 		}
	}
?>
