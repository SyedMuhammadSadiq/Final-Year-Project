

<!DOCTYPE html>
<html lang="en">
<head>
  <title ></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 


<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 500px;
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
  <a href="create-category.php">Create Category</a><hr>
  <a href="subcategory.php">Sub Category</a><hr>
  <a href="insert-product.php">Insert Products</a><hr>
  <a href="manage-products.php">Manage Products</a><hr>
  <a href="registered-users.php">Registered User</a> 
   
</div>


</body>
</html>
