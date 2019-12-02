<?php 
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "comfort_mart"); 
 if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

?>










 <?php require('./autoload.php'); ?>
    <?php include('layouts/header.php'); ?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>My Cart</title>




<!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
-->










        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/green.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
        <link href="assets/css/lightbox.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/rateit.css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="assets/css/config.css">

        <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
        <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
        <link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
        <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
        <link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->


    </head>


      
    <body class="cnt-home">

  

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class='active'>Order History</li>
   </ul> 
    
    
                 
            
                         
                        <div class="table-responsive" style="margin-top:2%;">
                            <form method="post" name="cart">
                                <table cellspacing="0" class=
                                "table table-striped table-bordered table-hover"
                                id="example" style="font-size:14px">









<hr>
                                <h3 style="text-align: center;" ><b>Your Orders</b></h3><hr><br>




                                    <thead>

                                        <tr>
                                             
                                            <th  width="50px">#</th>
                                            <th  width="90px">Image</th>
                                            <th  width="190px">Product Name</th>
                                            <th width="80px">Quantity</th>
                                            <th width="100px">Price Per Unit</th>
                                            <th width="140px">Total Amount</th>
                                            <th width="50px">Payment Method</th>
                                            <th width="50px">Order Date</th>
                                            <th width="50px">Action</th>




                
                                        </tr>
                                    </thead>
                                    <tbody>

<?php $query=mysqli_query($conn,"SELECT products.image as pimage,products.name as pname,products.id as pid,orders.productId as opid,orders.quantity as qty,products.price as pprice,orders.paymentMethod as paym,orders.orderDate as odate,orders.id as orderid from orders join products on orders.productId=products.id where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{ 
?>
                <tr >
                    <td><?php echo $cnt;?></td>
                    <td class="cart-image">
                        <a  href="detail.html">
                            <!--<img src="admin/product_images/<?php //echo $row['pid'];?>/<?php //echo $row['pimage'];?>" alt="" width="84" height="146">--> 
                            <img src="admin/product_images/<?php echo $row['pimage'] ?>" width="84" height="90"/>
                        </a>
                    </td>
                    <td >
                         <a href="product-details.php?pid=<?php echo $row['opid'];?>">
                        <b><?php echo $row['pname'];?></b></a> 
                        
                        
                    </td>
                    <td >
                        <?php echo $qty=$row['qty']; ?>   
                    </td>
                    <td ><?php echo $price=$row['pprice']; ?>  </td>
                     <td ><?php echo ($qty*$price);?></td>
                    <td class="cart-product-sub-total"><?php echo $row['paym']; ?>  </td>
                    <td class="cart-product-sub-total"><?php echo $row['odate']; ?>  </td>
                    
                 <!--   <td><a href="javascript:void(0);" onClick="popUpWindow('track-order.php?oid=<?php// echo $row['orderid'];?>');" title="Track order">Track</td>-->
                    <td>
                      <ul class="nav navbar-nav" id="menu">
                        
                        <li><a href="track-order.php?oid=<?php echo $row['orderid'];?>" data-toggle="modal" data-target="#theModal">Track</a>
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
<?php $cnt=$cnt+1;}  ?>
            
 

                                    </tbody>
                                </table>
                            </form>                                                                          
                        </div> 
                    </div> 
                                           

                   
  

 </div></div></div></div> <br><br><br><br><br><br><br> 


<!--
 <script type="text/javascript">
    $(document).ready(function(){
        $('table').DataTable();
        // searching:true,
        // ordering:false,
        // paging:true

    });

</script>-->

<?php include('layouts/footer.php'); ?>
</body></html>
<?php } ?>
