


<?php  

session_start();
error_reporting(0);
 $conn = mysqli_connect("localhost", "root", "", "comfort_mart");
 

 if(strlen($_SESSION['login'])==1)
    {   
header('location:checkout.php');
}
 //if(strlen($_SESSION['login'])==0)
 //   {   
//header('location:login.php');
//}





else  { 
    if (isset($_POST['submit'])) {

        mysqli_query($conn,"update orders set paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
        unset($_SESSION['cart']);
        header('location:order-history.php');

    }

?>

<?php require('./autoload.php'); ?>
    <?php include('layouts/header.php'); ?>



<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="index.php">Home</a></li>
                <li class='active'>Payment Method</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="checkout-box faq-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2>Available Payment Method</h2>
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

    <!-- panel-heading -->
        <!-- <div class="panel-heading">
        <h4 class="unicase-checkout-title">
           <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
             Select your Payment Method
            </a>
         </h4>
    </div> -->
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse in">

        <!-- panel-body  -->
        <div class="panel-body">
        <form name="payment" method="post">
        <input type="radio" name="paymethod" value="COD" checked="checked"> Cash On Delivery <br><br>
        <!-- <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
         <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card <br /><br /> -->
         <input type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-left: 5px;">
            

        </form>     
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>
<!-- checkout-step-01  -->
                      
                        
                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->

 






       <!--  
        <div>
            <br>
            <br>
            <br>
        </div>

        <div class="body-content">
            <div class="container">
                <div class="checkout-box ">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="panel-group checkout-steps" id="accordion">
                                
                                <div class="panel panel-default checkout-step-01">

                                    
                                    <div class="panel-heading">
                                        <h4 class="unicase-checkout-title">
            <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
              <span>1</span>Checkout Method
            </a>
         </h4>
                                    </div>
                                    

                                    <div id="collapseOne" class="panel-collapse collapse in">

                                        
                                        <div class="panel-body">
                                            <div class="row">

                                                 
                                                <div class="col-md-6 col-sm-6 guest-login">
                                                    <h4 class="checkout-subtitle">Guest or Register Login</h4>
                                                    <p class="text title-tag-line">Register with us for future convenience:</p>

                                                     
                                                    <form class="register-form" role="form">
                                                        <div class="radio radio-checkout-unicase">
                                                            <input id="guest" type="radio" name="text" value="guest" checked>
                                                            <label class="radio-button guest-check" for="guest">Checkout as Guest</label>
                                                            <br>
                                                            <input id="register" type="radio" name="text" value="register">
                                                            <label class="radio-button" for="register">Register</label>
                                                        </div>
                                                    </form>
                                                     

                                                    <h4 class="checkout-subtitle outer-top-vs">Register and save time</h4>
                                                    <p class="text title-tag-line ">Register with us for future convenience:</p>

                                                    <ul class="text instruction inner-bottom-30">
                                                        <li class="save-time-reg">- Fast and easy check out</li>
                                                        <li>- Easy access to your order history and status</li>
                                                    </ul>

                                                    <button type="submit" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Continue</button>
                                                </div>
                                                 
                                                <div class="col-md-6 col-sm-6 already-registered-login">
                                                    <h4 class="checkout-subtitle">Already registered?</h4>
                                                    <p class="text title-tag-line">Please log in below:</p>
                                                    <form class="register-form" role="form">
                                                        <div class="form-group">
                                                            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" placeholder="">
                                                            <a href="#" class="forgot-password">Forgot your Password?</a>
                                                        </div>
                                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                                                    </form>
                                                </div>
                                              

                                            </div>
                                        </div>
 
                                    </div>
                                 </div>
                               

                            </div>
                         </div>-->
                         
                <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <!--        <div id="brands-carousel" class="logo-slider wow fadeInUp">

                    <div class="logo-slider-inner">
                        <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                            

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             
                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                            

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             
                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                          

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                             

                            <div class="item">
                                <a href="#" class="image">
                                    <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                                </a>
                            </div>
                            
                        </div>
                         
                    </div>
                   

                </div>
                    </div>
            
        </div>-->
     
        <?php include('layouts/footer.php'); ?>
    

<?php } ?>