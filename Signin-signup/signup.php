<?php

require('../config/connection.php');
	
if($_SERVER['REQUEST_METHOD'] == "POST")
{
		$c_name = mysqli_real_escape_string($connection, $_POST['Customer_name']);
		$c_email = mysqli_real_escape_string($connection, $_POST['Customer_Email']);
		$c_num = mysqli_real_escape_string($connection, $_POST['Customer_Number']);
		$c_pass = mysqli_real_escape_string($connection, $_POST['Customer_Password']);
		$c_pass = md5($c_pass);
		$query = "insert into customer (Customer_name, Customer_Email, Customer_Number, Customer_Password) values ('$c_name', '$c_email', '$c_num', '$c_pass');";
		mysqli_query($connection,$query);

 echo "Created Successfully!";
}
else{
	echo "error";
}

?>