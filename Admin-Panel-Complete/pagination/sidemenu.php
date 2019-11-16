

<!DOCTYPE html>
<html lang="en">
<head>
  <title ></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

 <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
 
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
 
-->



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 520px;
  width: 230px;
  
  z-index: 1;
  top: 0;
  left: 0;
  
  background-color: #43870c;
  overflow-x: hidden;
   position: absolute;
  margin-top: 70px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  
  color: #f1f1f1;
  display: block;

}

.sidenav a:hover {
color: #080807
}




</style>
		 
</head>
<body>
  
       <?php include('include/db.php'); ?>
<div class="sidenav" >
  
  <li>
<a class="collapsed" data-toggle="collapse" href="#togglePages"  style=" word-spacing: 5px">
	Order Management
	  <label class="glyphicon glyphicon-chevron-down"></label> </a>  

	 
</a>
<ul id="togglePages" class="collapse ">
									
 
    <li><a href="Delivered-orders.php">Todays Orders </a></li>
    <li><a href="Delivered-orders.php">Pending Orders</a></li>
    <li><a href="Delivered-orders.php">Delivered Orders</a></li>

 
</ul></li>
                <hr>
  <a href="manage-users.php">Manage Users</a><hr> 

  <a href="insert_category.php">Create Category <span class="badge" style="background-color: black; float: right"><?php
                          $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM category"));
                          echo $count;
                          ?> </span></a><hr>
  <a href="insert_brand.php">Insert Brands <span class="badge" style="background-color:black; float: right"><?php
                          $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM brands"));
                          echo $count;
                          ?> </span></a><hr>
  <a href="insert-product.php">Insert Products</a><hr>
  <a href="manage-products.php" >   Manage Products   <span class="badge" style="background-color: black; float: right"><?php
                          $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM products"));
                          echo $count;
                          ?> </span></a><hr>
  <a href="registered-users.php">Registered User</a> 
   
</div>


</body>
</html>
