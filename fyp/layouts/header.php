<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Comfort Mart</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/blue.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>




<?php 

 if(isset($_Get['action'])){
        if(!empty($_SESSION['cart'])){
        foreach($_POST['quantity'] as $key => $val){
            if($val==0){
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity']=$val;
            }
        }
        }
    }
 

  if(isset($_POST["cart"]))  
 { 
       if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["cart"] as $keys => $value )  
           {  
                if($value["id"] == $_GET["id"])  
                {  
                     unset($_SESSION["cart"][$keys]);  
                      echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 }
?>






<body class="cnt-home">
    <header class="header-style-1">
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                    <div class="cnt-account">
                        <ul class="list-unstyled">


 
               
                 



                            
                           <?php if (isset($_SESSION['user'])) { ?>
                                <li><a href="customer/my_account.php"><i class="icon fa fa-user"></i>My Account</a></li>
                                <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                                <li><a href="javascript:void(0);"><i class="icon fa fa-shopping-cart"></i>Order History</a></li>
                                <li><a href="javascript:void(0);" onclick="logout()"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
                            <?php } else { ?>
                                <li><a href="login.php"><i class="icon fa fa-lock"></i>Login</a></li>
                             <?php }   ?>
                        </ul>  






<!--<ul class="list-unstyled">

<?php //if(strlen($_SESSION['login']))
    {   ?>
                <li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php// echo $_SESSION['username'];?></a></li>
                <?php } ?>

                    <li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
                    <li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                    <li><a href="#"><i class="icon fa fa-key"></i>Checkout</a></li>
                    <?php //if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li>
<?php }
//else{ ?>
    
                <li><a href="logout.php"><i class="icon fa fa-sign-out"></i>Logout</a></li>
                <?php //} ?>  
                </ul>-->















                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                        <div class="logo">
                            <a href="index.php"> <img src="assets/images/logo.png" alt="logo"> </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                                           
                                        </li>
                                    </ul>
                                    <input class="search-field" placeholder="Search here..." />
                                    <a class="search-button" href="javascript:void(0);"></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                        <div class="dropdown dropdown-cart">
<!--

<?php
//if(!empty($_SESSION['cart'])){
    ?>




                            <a href="javascript:void(0);" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"></div>
                                    <div class="basket-item-count"><span class="count"> <?php //echo $_SESSION['qnty'];?></span></div>
                                    <div class="total-price-basket"> <span class="lbl"></span> <span class="total-price"> <span class="sign">Rs.</span><span class="value">  <?php //echo $_SESSION['tp']; ?></span> </span>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu">



<?php
// $conn = mysqli_connect("localhost", "root", "", "comfort_mart");  
//    $sql = "SELECT * FROM products WHERE id IN(";
//            foreach($_SESSION['cart'] as $id => $value){
//            $sql .=$id. ",";
 //           }
//            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
//            $query = mysqli_query($conn,$sql);
//            $totalprice=0;
//            $totalqunty=0;
//            if(!empty($query)){
//            while($row = mysqli_fetch_array($query)){
//                $quantity=$_SESSION['cart'][$row['id']]['quantity'];
//                $subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
 //               $totalprice += $subtotal;
 //               $_SESSION['qnty']=$totalqunty+=$quantity;

    ?>







                                <li>
                                    <div class="cart-item product-summary">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="image">
                                                    <a href="detail.html"><img src="assets/images/cart.jpg" alt="">   

                                              <img  src="fyp/productimages/<?php //echo $row['id'];?>/<?php// echo $row['image'];?>" width="35" height="50" alt="">


                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <h3 class="name"><a href="index8a95.html?page-detail">Simple Product <a href="index.php?page-detail"><?php //echo $row['name']; ?></a></a></h3>
                                                <div class="price">$600.00 <?php// echo ($row['price'])  ?>*<?php// echo $_SESSION['cart'][$row['id']]['quantity']; ?></div>
                                            </div>
                                            <div class="col-xs-1 action"> <a href="javascript:void(0);"><i class="fa fa-trash"></i></a> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix cart-total">
                                        <div class="pull-right"> <span class="text">Total Total :</span><span class='price'>$600.00 <?php //echo $_SESSION['tp']="$totalprice". ".00"; ?></span> </div>
                                        <div class="clearfix"></div>
                                        <a href="cart.php" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> 
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php// }  //else{   ?>
<div class="dropdown dropdown-cart">
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="total-price-basket">
                    <span class="lbl">cart -</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span>
                        <span class="value">00.00</span>
                    </span>
                </div>
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="basket-item-count"><span class="count">0</span></div>
            
            </div>
        </a>
        <ul class="dropdown-menu">
        
    
        
        
            <li>
                <div class="cart-item product-summary">
                    <div class="row">
                        <div class="col-xs-12">
                            Your Shopping Cart is Empty.
                        </div>
                        
                        
                    </div>
                </div>//.cart-item
            
                
            <hr>
        
            <div class="clearfix cart-total">
                
                <div class="clearfix"></div>
                    
                <a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shooping</a>    
            </div>//.cart-total
                    
                
        </li>
        </ul>//.dropdown-menu
    </div>
    <?php //}?>





-->


                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
<?php
if(!empty($_SESSION['cart'])){
    ?>
   <!-- <div class="dropdown dropdown-cart">
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="total-price-basket">
                    <span class="lbl">My cart -</span>
                    <span class="total-price">
                        <span class="sign">PKR: </span>
                        <span class="value"><?php// echo $_SESSION['tp']; ?></span>
                        
                    </span>
                </div>
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="basket-item-count" ><span class="count"><?php// echo $_SESSION['qnty'];?></span></div>
            
            </div>


            
        </a>-->






<!-- cart design adjust krrahun -->

 <a  href="javascript:void(0);" class="dropdown-toggle lnk-cart" data-toggle="dropdown" >
                                <div class="items-cart-inner">
                                    <div class="basket">
                                    <div class="basket-item-count"><span class="count"> <?php echo $_SESSION['qnty'];?></span></div>
                                  <!--   <div class="total-price-basket"> <span class="lbl"></span> <span class="total-price"> <span class="sign">Rs.</span><span class="value">  <?php //echo $_SESSION['tp']; ?></span> </span>
                                    </div> --></div>
                                </div>
                            </a>









 
        <ul class="dropdown-menu" >
        
         <?php
    $sql = "SELECT * FROM products WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $Values){
            $sql .=$id. ",";
            }
            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
            $conn = mysqli_connect("localhost", "root", "", "comfort_mart"); 
            $query = mysqli_query($conn,$sql);
            $totalprice=0;
            $totalqunty=0;
            if(!empty($query)){
            while($value = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$value['id']]['quantity'];
                $subtotal= $_SESSION['cart'][$value['id']]['quantity']*$value['price'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;

    ?>
        
        
            <li>
                <div class="cart-item product-summary">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="image">
                                <a href="#"><!--<img  src="images/<?php// echo $value['id'];?>/<?php //echo $value['image'];?>" width="35" height="50" alt="">-->

                                    <img src="admin/product_images/<?php echo  $value['image']; ?>" width="35" height="50" alt="">

                                </a>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            
                            <h3 class="name"><a href="index.php?page-detail"><?php echo $value['name']; ?></a></h3>
                            <div class="price">Rs.<?php echo ($value['price']); ?>*<?php echo $_SESSION['cart'][$value['id']]['quantity']; ?></div>
                        </div> 
                        <div>
                        <div class="delete-product">   
                        

<a  href="index.php?action=delete&id=<?php echo $value["id"]; ?>" ><span class="glyphicon glyphicon-remove" style="color: green"></span></a></div>


 
                        </div><br><br><br>
                        
                    </div>
                </div><!-- /.cart-item -->
            
                <?php } }?>
                <div class="clearfix"></div>
            <hr>
        
            <div class="clearfix cart-total">
                <div class="pull-right">
                    
                        <span class="text">Total :</span><span class='price'>Rs.<?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span>
                        
                </div>
            
                <div class="clearfix"></div>
                    
                <a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>    
            </div><!-- /.cart-total-->
                    
                
        </li>
        </ul><!-- /.dropdown-menu--> 
    </div><!-- /.dropdown-cart -->
<?php } else { ?>
<div class="dropdown dropdown-cart">
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">



                 
 <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                                <div class="items-cart-inner">
                                    <div class="basket"></div>
                                    <div class="basket-item-count"><span class="count">0</span></div>
                                    <div class="total-price-basket"> <span class="lbl"></span> <span class="total-price"> <span class="sign"></span><span class="value"> </span> </span> 
                                    </div>
                                </div>
                            </a>
 

  <!-- 
                <div class="total-price-basket">
                    <span class="lbl"> My cart -</span>
                     
                    <span class="total-price">
                        <span class="sign">PKR.</span>
                        <span class="value">00.00</span>
                    </span>
                </div>
              <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
               </div>
               
                <div class="basket-item-count"><span class="count">0</span></div>
            
            </div>
        </a>  -->
        <ul class="dropdown-menu">
        
    
        
        
            <li>
                <div class="cart-item product-summary">
                    <div class="row">
                        <div class="col-xs-12">
                            Your Shopping Cart is Empty.
                        </div>
                        
                        
                    </div>
                </div><!-- /.cart-item -->
            
                
            <hr>
        
            <div class="clearfix cart-total">
                
                <div class="clearfix"></div>
                    
                <a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shopping</a> 
             </div><!-- /.cart-total-->
                    
                
        </li>
        </ul><!-- /.dropdown-menu-->
    </div>
    <?php }?>




















</div>


                </div>     
            </div>
        </div> 
 

        <div class="header-nav animate-dropdown">
            <?php include_once('top_navbar.php'); ?>
        </div>
    </header>

    <script type="text/javascript">
        
        function logout () {
            if (confirm("Are you sure.?")) {

                window.location.href = 'logout.php';
            }
        }
    </script>


 

