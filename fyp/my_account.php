<?php
session_start();
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "comfort_mart"); if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{
    if(isset($_POST['update']))
    {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $query=mysqli_query($con,"UPDATE user set name='$name',phone='$phone' where id='".$_SESSION['id']."'");
        if($query)
        {
echo "<script>alert('Your info has been updated');</script>";
        }
    }


date_default_timezone_set('Asia/Karachi');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password FROM  user where password='".md5($_POST['cpass'])."' && id='".$_SESSION['id']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($con,"update user set password='".md5($_POST['newpass'])."', updated_at='$currentTime' where id='".$_SESSION['id']."'");
echo "<script>alert('Password Changed Successfully !!');</script>";
}
else
{
    echo "<script>alert('Current Password not match !!');</script>";
}
}

?>

 <?php require('./autoload.php'); ?>
    <?php include('layouts/header.php'); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
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
<script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.newpass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpass.focus();
return false;
}
else if(document.chngpwd.cnfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cnfpass.focus();
return false;
}
else if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cnfpass.focus();
return false;
}
return true;
}
</script>

    </head>
    <body class="cnt-home">
 
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>My-account</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="checkout-box inner-bottom-sm"  >
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion" >
                        <!-- checkout-step-01  -->


<div class="panel panel-default checkout-step-01" >

                          
    <!-- panel-heading -->
        <div class="panel-heading" >
        <h4 class="unicase-checkout-title" >
            <a data-toggle="collapse" class="collapse" data-parent="#accordion" href="#collapseOne" >
                <span style="background-color: #2d9c05">1</span>My Profile
            </a>
         </h4>
    </div>
    <!-- panel-heading -->

    <div id="collapseOne" class="panel-collapse collapse " >

        <!-- panel-body  -->
        <div class="panel-body">
            <div class="row">       
<h4 style="text-align: center"><i><b>Personal information</b></i></h4>
                <div class="col-md-12 col-sm-12 already-registered-login">

<?php
$query=mysqli_query($con,"select * from user where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
?>

                    <form class="register-form" role="form" method="post">
<div class="form-group">
                        <label class="info-title" for="name"><b>Name<span>*</b></span></label>
                        <input type="text" class="form-control unicase-form-control text-input" value="<?php echo $row['name'];?>" id="name" name="name" required="required">
                      </div>



                        <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1"><b>Email Address <span>*</b></span></label>
             <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="<?php echo $row['email'];?>" readonly>
                      </div>
                      <div class="form-group">
                        <label class="info-title" for="Contact No."><b>Contact No. <span>*</span></b></span></label>
                        <input type="text" class="form-control unicase-form-control text-input" id="phone" name="phone" required="required" value="<?php echo $row['phone'];?>"  maxlength="11">
                      </div>
                      <button type="submit" name="update" class="btn-upper btn btn-primary checkout-page-button">Update</button>
                    </form>
                    <?php } ?>
                </div>  
                <!-- already-registered-login -->       

            </div>          
        </div>
        <!-- panel-body  -->

    </div><!-- row -->
</div>
<!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02" >
                            <div class="panel-heading">
                              <h4 class="unicase-checkout-title">
                                <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                  <span style="background-color: #2d9c05">2</span>Change Password
                                </a>
                              </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                             
                    <form class="register-form" role="form" method="post" name="chngpwd" onSubmit="return valid();">
<div class="form-group">
                        <label class="info-title" for="Current Password">Current Password<span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="cpass" name="cpass" required="required">
                      </div>



                        <div class="form-group">
                        <label class="info-title" for="New Password">New Password <span>*</span></label>
             <input type="password" class="form-control unicase-form-control text-input" id="newpass" name="newpass">
                      </div>
                      <div class="form-group">
                        <label class="info-title" for="Confirm Password">Confirm Password <span>*</span></label>
                        <input type="password" class="form-control unicase-form-control text-input" id="cnfpass" name="cnfpass" required="required" >
                      </div>
                      <button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Change </button>
                    </form> 




                              </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->
                        
                    </div><!-- /.checkout-steps -->
                </div>
             </div><!-- /.row -->
        </div><!-- /.checkout-box -->
 
</div>
</div>
    
    <?php include('layouts/footer.php'); ?>
</body>
</html>
<?php } ?>