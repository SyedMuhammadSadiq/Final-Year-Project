<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?>
  
	 					<div class="main"><br><br><br>
								<table class="table table-bordered"  style="font-size: 14px;"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th>User Name</th>
											<th>Email </th>
											<th>Contact No</th>
											<th>Shipping Address</th> 
 
											
										</tr>
									</thead>
									<tbody>

										<?php  
										include('include/db.php');
										$query=mysqli_query($conn,"select * from user");
											 
											while($row=mysqli_fetch_array($query))
											{
											?>									
										<tr>
											<td><?php echo ($row['id']);?></td>
											<td><?php echo ($row['name']);?></td>
											<td><?php echo ($row['email']);?></td>
											<td><?php echo ($row['contactno']);?></td>
											<td><?php echo ($row['shippingaddress']);?></td> 
										<?php } ?>

										</tr>
 											
									
						
										<!--<tr>
											<td>1</td>
											<td>Moid Ahmed</td>
											<td>moidahmed0@gmail.com</td>
											<td>03363057355</td>
											<td>gulshan iqbal , isphanni road karachi</td>
											 
										</tr> -->
										 
										 

									</tbody>
								</table>
				</div>
 

</body>

</html>
