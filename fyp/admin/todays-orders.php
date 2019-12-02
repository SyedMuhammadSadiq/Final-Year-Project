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

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />

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
											<th> Name</th>
											<th>Email </th>
											<th>Contact No</th>
											<th>Shipping Address</th>
											<th>Product </th>
											<!--<th>Product Image</th>-->
											<th>Quantity </th>
											<th>Total Amount </th>
											<th>Payment Method</th>
											<th>Order Date</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
	 								<tbody>

<?php 
 $f1="00:00:00";
$from=date('Y-m-d')." ".$f1;
$t1="23:59:59";
$to=date('Y-m-d')." ".$t1;
 
$query=mysqli_query($conn,"SELECT user.name as username,user.email as useremail,products.name as productname, orders.quantity as quantity,orders.orderDate as orderdate,orders.user_address as order_address,orders.user_number as order_user_number,orders.paymentMethod as order_payment_method,products.price as productprice,products.image as productimage,orders.id as id  from orders join user on  orders.userId=user.id join products on products.id=orders.productId where orders.orderDate Between '$from' and '$to'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo $cnt;?></td>
											<td><?php echo $row['username'];?></td>
											<td><?php echo $row['useremail'];?></td>
											<td><?php echo $row['order_user_number'];?></td>
										
											 
											<td><?php echo  $row['order_address'];?></td>

											<td><?php echo $row['productname'];?></td>
											<!--<td><?php //echo $row['productimage'];?></td>-->
											<td><?php echo $row['quantity'];?></td>
											<td><?php echo $row['quantity']*$row['productprice'];?></td>
											<td><?php echo $row['order_payment_method'];?></td>
											<td><?php echo $row['orderdate'];?></td>
											<td>   
											 


  <ul class="nav navbar-nav" id="menu">
    
    <li><a href="updateorder.php?oid=<?php echo $row['id'];?>" data-toggle="modal" data-target="#theModal">Response</a>
    </li>
  </ul>
  <div id="theModal" class="modal fade text-center">
    <div class="modal-dialog">
      <div class="modal-content">
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




<!--

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>		

-->
