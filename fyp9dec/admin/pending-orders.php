
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "comfort_mart");
if(strlen($_SESSION['admin_email'])==0)
	{	
header('location:index.php');
}
else{

date_default_timezone_set('Asia/Karachi'); 
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>



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
 								<br><br><br>

								<table class="table table-bordered"  style="font-size: 14px;"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th>Order Id</th>
											<th> Name</th>
											<th>Email </th>
											<th>Contact No</th>
											<th>Shipping Address</th>
											<!--<th>Product </th>
											<th>Quantity </th>
											<th>Total Amount </th>-->
											<th>Payment Method</th>
											<th>Order Date</th>
											<th>View Order</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
	 								<tbody>

<?php 
 $status='Delivered';
 
$query=mysqli_query($conn,"SELECT user.name as username,user.email as useremail,products.name as productname, orders.quantity as quantity,orders.orderDate as orderdate,orders.user_address as order_address,orders.user_number as order_user_number,orders.paymentMethod as order_payment_method,products.price as productprice,products.image as productimage,orders.uniqueId as id  from orders join user on  orders.userId=user.id join products on products.id=orders.productId where orders.orderStatus!='$status' or orders.orderStatus is null GROUP BY id,username,useremail,order_user_number,order_address ORDER BY orderdate DESC " );
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo $cnt;?></td>
											<td><?php echo $row['id'];?></td>
											<td><?php echo $row['username'];?></td>
											<td><?php echo $row['useremail'];?></td>
											<td><?php echo $row['order_user_number'];?></td>
											<td><?php echo $row['order_address'];?></td>
										<!--<td><?php //echo $row['productname'];?></td> 
											<td><?php //echo $row['quantity'];?></td>
											<td><?php //echo $row['quantity']*$row['productprice'];?></td>-->
											<td><?php echo $row['order_payment_method'];?></td>
											<td><?php echo $row['orderdate'];?></td>
											<td>  <ul class="nav navbar-nav" id="menu">
     <li><a href="view_order.php?oid=<?php echo $row['id'];?>" data-toggle="modal" data-target="#theModal">View Order</a></li>
 </ul>
  <div id="theModal" class="modal fade text-center">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
  </div> </td>
											








											<td>   
											 





 <ul class="nav navbar-nav" id="menu">
     <li><a href="updateorder.php?oid=<?php echo $row['id'];?>" data-toggle="modal" data-target="#theModal">Response</a></li>
 </ul>
  <div id="theModal" class="modal fade text-center" >
    <div class="modal-dialog">
      <div class="modal-content" >
      </div>  
    </div>
  </div>

											</td>
											</tr>

										<?php $cnt=$cnt+1; } ?>
  											
									</tbody>  
								</table>
		</div>
 

 
</body>
</html>
<?php } ?>



<script type="text/javascript">
$('#theModal').on('hidden.bs.modal', function () { 
    location.reload();
});
 
 </script>