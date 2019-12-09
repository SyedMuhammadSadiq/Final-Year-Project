 

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
  height: 520px;
  width: 230px;
  
  z-index: 1;
  top: 0;
  left: 0;
  
  background-color: #43870c;
  overflow-x: hidden;
   position: fixed;
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
  

 
 <br> 
 
                    
  
<a  class="collapse" data-toggle="collapse"    href="#togglePages"  style=" word-spacing: 5px ;" >
Order Management 
  <label class="glyphicon glyphicon-chevron-down"></label> </a>  

 
 
<ul id="togglePages" class="collapse" >
                  
 
    <li><a href="todays-orders.php">Todays Orders 
           <?php
             $f1="00:00:00";
             $from=date('Y-m-d')." ".$f1;
             $t1="23:59:59";
             $to=date('Y-m-d')." ".$t1;
             $result = mysqli_query($conn,"SELECT DISTINCT uniqueId FROM Orders where  orderDate Between '$from' and '$to'");
             $num_rows1 = mysqli_num_rows($result);
               {
            ?>
           <b class="label orange pull-right" style="background-color: black;"><?php echo $num_rows1; ?></b>
                      <?php } ?> 
    </a> </li>


    <li><a href="pending-orders.php">Pending Orders 
          <?php 
            $status='Delivered';                   
            $ret = mysqli_query($conn,"SELECT DISTINCT uniqueId FROM Orders where orderStatus!='$status' || orderStatus is null ");
            $num = mysqli_num_rows($ret);
            {
          ?>
            <b class="label orange pull-right" style="background-color: black;"><?php echo $num; ?></b>
                  <?php } ?>
    </a></li>


    <li><a href="delivered-orders.php">Delivered Orders
          <?php 
            $status='Delivered';                   
            $rt = mysqli_query($conn,"SELECT DISTINCT uniqueId FROM Orders where orderStatus='$status'");
            $num1 = mysqli_num_rows($rt);
            {
          ?>
            <b class="label green pull-right"  style="background-color: black;"><?php echo $num1; ?></b>
                <?php } ?>
    </a></li>

 
</ul>

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
  <a href="registered-users.php"  >Registered User <span class="badge" style="background-color: black; float: right"><?php
                          $count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user"));
                           echo $count;
                          ?> </span></a> 

  
</div>


</body>
</html>  


  