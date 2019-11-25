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
				
								<table class="table table-bordered"  style="font-size: 14px;"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th> User Name</th>
											<th>User Email </th>
											<th>Contact no</th>
											<th>Address</th>
											
											
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
										include('include/db.php');
										$query=mysqli_query($conn,"select * from user");
											 $i = 0;
											while($row=mysqli_fetch_array($query))
											{  $i++;
											?>									
										<tr>
											<td><?php echo $i; ?></td>
											<td><?php echo ($row['name']);?></td>
											<td><?php echo ($row['email']);?></td>
											<td><?php echo ($row['phone']);?></td>
											<td><?php echo ($row['address']);?></td>
										<?php } ?>

										</tr>
 											
									

									</tbody>
								</table>


</div>
 
</body>
</html>
