<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
 <?php include('include/db.php'); ?>

    <?php include('include/header.php');?>
<?php include('include/sidemenu.php');?> 




<br><br><br><br><br><br> 


  </form>


<br><br>
<div class="main">
<form class="form-horizontal" method="post" action="insert_brand.php" enctype="multipart/form-data" >

<div class="form-group">

<div  class="col-md-6" class="form-group">
  <div class="form-group">
  <label class="col-md-4 control-label" >Insert Brand</label>  
  <div class="col-md-8">
  <input placeholder="Enter Brand." class="form-control" name="brand_name"  type="text"> <br>
  <button class="btn btn-primary" type="submit" name="add_brand" >Add Brand</button>

  </div>
</div></div>
</div>
</form>

<br><br>




                <table class="table table-bordered"  style="font-size: 16px;"> 
                  <thead class="thead-dark">
                      
                    <tr>
    
                      <th>#</th>
                      <th> Brand Name</th>
                      <th>Action</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
             <?php  
 
                    include('include/db.php');
                    $query=mysqli_query($conn ,"select * from brands");
                       $i = 0;
                      while($row=mysqli_fetch_array($query))
                      {
                        $brand_id = $row['brand_id'];
                        $brand_name = $row['brand_name'];
                        $i++;
                      ?>                  
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $brand_name; ?></td>
                       <td><a class="btn btn-primary" href="update_brand.php?update_brand=<?php echo $brand_id; ?>">Update</a>
                        <a  class="btn btn-danger"  href="delete_brand.php?delete_brand=<?php echo $brand_id; ?>">Delete</a></td>

                    <?php } ?>
                      </tr>
                             
                  

                  </tbody>
                </table>





 </body>
 </html>
    
  <?php


include('include/db.php');
  if (isset($_POST['add_brand'])) {

    $brandname = $_POST['brand_name'];

    $insert_brand = "insert into brands (brand_name) values ('$brandname')";

    $run_brand = mysqli_query($conn, $insert_brand);

    if ($run_brand) {

      echo "<script>alert('New Brand has been inserted!')</script>";
      echo "<script>window.open('insert_brand.php', '_self')</script>";

    }
    else {
          echo "<script>alert('Brand has not been inserted!')</script>";

         }
  }

  ?>




