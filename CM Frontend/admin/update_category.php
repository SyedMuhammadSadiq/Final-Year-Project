<!DOCTYPE html>
<html>
<head>
  <title> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include('include/header.php');?>
<?php include('include/sidemenu.php');?> 

      <?php
 include('include/db.php'); 
       if (isset($_GET['update_category'])) {

        $category_id = $_GET['update_category'];

        $get_category = "select * from category where id='$category_id'";

        $run_category = mysqli_query($conn, $get_category);

        $row_category = mysqli_fetch_array($run_category);

        $category_id = $row_category['id'];
        $category_name = $row_category['name'];
      }
      ?>


<br><br><br>
<div class="main">
<form class="form-horizontal" method="post" enctype="multipart/form-data" >

<div class="form-group">
  <div class="col-md-6" class="form-group">

<div class="form-group">
  <label class="col-md-4 control-label"  >Category  </label>
  <div class="col-md-8">
  <input class="form-control  " name="new_category"  type="text" value="<?php echo $category_name; ?>"> <br>
  <button class="btn btn-primary" type="submit" name="updateCategory" >Update Category</button>

  </div>
</div>
</div></div>



  </form>



      <?php
      if (isset($_POST['updateCategory'])) {

        $update_id = $category_id;

        $new_category = $_POST['new_category'];

        $update_category = "update category set name='$new_category' where  id='$update_id'";

        $run_category = mysqli_query($conn, $update_category);

        if ($run_category) {

          echo "<script>alert(' Category has been updated!')</script>";
          echo "<script>window.open('insert_category.php', '_self')</script>";
        }
      }

      ?>
    </div>
  </div>

</body>
</html>

