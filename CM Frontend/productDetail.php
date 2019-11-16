<?php 
session_start();
error_reporting(0);
include('server/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
    $id=intval($_GET['id']);
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;
    }else{
        $sql_p="SELECT * FROM products WHERE id={$id}";
        $query_p=mysqli_query($credentials,$sql_p);
        if(mysqli_num_rows($query_p)!=0){
            $row_p=mysqli_fetch_array($query_p);
            $_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
            header('location:my-cart.php');
        }else{
            $message="Product ID is invalid";
        }
    }
}
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
    if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
 
}
 

?>
























<?php require('./autoload.php'); ?>
<?php include('layouts/header.php'); ?>

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row single-product">
            <div class="col-md-3 sidebar">
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n">

                    </div>

                </div>
            </div>
            <!-- /.sidebar -->
            <div class="col-md-9">
                <div class="detail-block">
                    <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">

                                <div id="owl-single-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                    <div class="owl-wrapper-outer">
                                        <div class="owl-wrapper" style="width: 5724px; left: 0px; display: block;">
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide1">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p8.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide2">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p9.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p9.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide3">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p10.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p10.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide4">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p11.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p11.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide5">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p12.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p12.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide6">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p13.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p13.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide7">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p14.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p14.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide8">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p15.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p15.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="owl-item" style="width: 318px;">
                                                <div class="single-product-gallery-item" id="slide9">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p16.jpg">
                                                        <img class="img-responsive" alt="" src="assets/images/products/p16.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="owl-controls clickable">
                                        <div class="owl-pagination">
                                            <div class="owl-page active"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                            <div class="owl-page"><span class=""></span></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.single-product-slider -->


                            </div>
                            <!-- /.single-product-gallery -->
                        </div>
                        <!-- /.gallery-holder -->
                        <div class="col-sm-6 col-md-7 product-info-block">
                            <div class="product-info">
                                <h1 class="name">Floral Print Buttoned <?php echo $row['name'];?></h1>

                          

                                <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Availability :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value">In Stock <?php echo $row['stock'];?></span>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="stock-container info-container m-t-10">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="stock-box">
                                                <span class="label">Brand :</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="stock-box">
                                                <span class="value" >Nike <?php echo $row['brand_name'];?></span>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- /.row -->
                                </div>
                                <!-- /.stock-container -->

                                <div class="description-container m-t-20">
                                    Product Description:  <?php echo $row['description'];?>
                                </div>
                                <!-- /.description-container -->

                                <div class="price-container info-container m-t-20">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="price-box">
                                                <span class="price">Rs.600<?php echo $row['price'];?></span>
                                               
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.price-container -->

                                <div class="quantity-container info-container">
                                    <div class="row">

                                        <div class="col-sm-2">
                                            <span class="label">Qty :</span>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="cart-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-7">
                                            <a href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
                                         </div>

                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.quantity-container -->

                            </div>
                            <!-- /.product-info -->
                        </div>
                        <!-- /.col-sm-7 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.product-tabs -->
            </div>
            <!-- /.col -->
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /.container -->
</div>
<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme" style="opacity: 1; display: block;">
    <div class="owl-wrapper-outer">
        <div class="owl-wrapper" style="width: 3860px; left: 0px; display: block;">
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand1.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand3.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand4.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand5.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand6.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img src="assets/images/brands/brand2.png" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                    </a>
                </div>
            </div>
            <div class="owl-item" style="width: 193px;">
                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="owl-controls clickable">
        <div class="owl-buttons">
            <div class="owl-prev"></div>
            <div class="owl-next"></div>
        </div>
    </div>
</div>
<?php include('layouts/footer.php'); ?>