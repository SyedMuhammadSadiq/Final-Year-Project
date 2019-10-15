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
				<div class="main">
				
								<table class="table table-bordered"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th> User Name</th>
											<th>User Email </th>
											<th>Contact no</th>
											
											
										</tr>
									</thead>
									<tbody>
						
										<!-- 
										    <tr>
											<td>1</td>
											<td>Moid</td>
											<td>moidahmed0@gmail.com</td>
											<td>03363057355</td>
										</tr> -->
									
									<?php  
										$conn = mysqli_connect("localhost", "root", "", "userregister");
										$query=mysqli_query($conn,"select * from user");
											 
											while($row=mysqli_fetch_array($query))
											{
											?>									
										<tr>
											<td><?php echo ($row['id']);?></td>
											<td><?php echo ($row['name']);?></td>
											<td><?php echo ($row['email']);?></td>
											<td><?php echo ($row['contactno']);?></td>
										<?php } ?>

										</tr>
 											
									

									</tbody>
								</table>


</div>
<?php include('include/footer.php');?>

</body>
</html>
