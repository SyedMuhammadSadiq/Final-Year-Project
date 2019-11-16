<!DOCTYPE html>
<html>
<head>
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?> 


        <?php
include('include/db.php');
        if (isset($_GET['update_brand'])) {

            $brand_id = $_GET['update_brand'];

            $get_brand = "select * from brands where brand_id='$brand_id'";

            $run_brand = mysqli_query($conn, $get_brand);

            $row_brand = mysqli_fetch_array($run_brand);

            $brand_id = $row_brand['brand_id'];

            $brand_name = $row_brand['brand_name'];
        }            


        ?>



<br><br><br>
<div class="main">
<form class="form-horizontal" method="post" enctype="multipart/form-data" >

<div class="form-group">
  <div class="col-md-6" class="form-group">

<div class="form-group">
  <label class="col-md-4 control-label"  >Brand  </label>
  <div class="col-md-8">
  <input class="form-control  " name="new_brand"  type="text" value="<?php echo $brand_name; ?>"> <br>
  <button class="btn btn-primary" type="submit" name="updateBrand" >Update Brand</button>

  </div>
</div>
</div></div>






  </form>


</body>
</html>



 <?php

  if (isset($_POST['updateBrand'])) {

    $update_id = $brand_id;

    $new_brand = $_POST['new_brand'];

    $update_brand = "update brands set brand_name='$new_brand' where brand_id='$update_id'";

    $run_update = mysqli_query($conn, $update_brand);

    if ($run_update) {

        echo "<script>alert('Brand has been updated!')</script>";
        echo "<script>window.open('insert_brand.php', '_self')</script>";

    }
}

?>
