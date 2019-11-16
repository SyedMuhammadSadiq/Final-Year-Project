

<?php
  include('include/db.php'); 
if(isset($_POST['ProductSubmit'])) { 
          
           
            $productname=$_POST['product_name'];
            $brands_id=$_POST['brands_id'];
            $productprice=$_POST['product_price'];
            $productdescription=$_POST['product_description'];
            $categorys_id=$_POST['categorys_id'];
            $stock = $_POST['stock'];
            $productimage=$_FILES['product_image']['name'];
            $tmp = $_FILES['product_image']['tmp_name'];
            move_uploaded_file($tmp, "product_images/$productimage");
            

 
          $query= "INSERT  INTO products(product_name,brands_id,product_price,product_description,categorys_id,stock,product_image) values('$productname','$brands_id','$productprice','$productdescription' ,'$categorys_id' , '$stock' ,'$productimage')";

          
          $result = mysqli_query($conn, $query);
           if($result){
           
            

          echo "<script>alert('product inserted');</script>";
          echo "<script>window.open('insert-product.php', '_self')</script>";
            }
                 
           else {
          echo "<script>alert('product is not inserted');</script>";
           }

          }
 
?>




<!DOCTYPE html>
<html lang="en">
<head>	

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

         
<?php include('include/db.php');?>
<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?> 

<br><br>
  <div class="main">
<form class="form-horizontal" method="POST" action="insert-product.php" enctype="multipart/form-data" >
 
<div class="form-group">
  <label class="col-md-4 control-label"  >Category</label>  
  <div class="col-md-4" class="form-group">
  
  <select class="form-control input-md" name="categorys_id"> 
                     <option>Select a Category..</option>

               <?php  
                   
                    $query=mysqli_query($conn,"select * from category ");
                       
                      while($row=mysqli_fetch_array($query))
                      {
                       
                      $category_id = $row['category_id'];
                      $category_name = $row['category_name'];    
                       echo "<option value='$category_id'>$category_name</option>";         
                   
                     
                    } ?>

 
                    </select>
   </div>
    </div>


 


 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Name</label>  
  <div class="col-md-4">
  <input placeholder="Product Name" class="form-control input-md" name="product_name"   type="text">
    
  </div>
</div>





      <div class="form-group">
           <label class="col-md-4 control-label" >Brand Name</label>
             <div class="col-md-4" class="form-group">

           <select  class="form-control input-md" name="brands_id">
            <option>Select a Brand..</option>
            <?php
            $get_brands = "select * from brands";

            $run_brands = mysqli_query($conn, $get_brands);

            while ($row_brands = mysqli_fetch_array($run_brands)) {

              $brand_id = $row_brands['brand_id'];
              $brand_name = $row_brands['brand_name'];

              echo "<option value='$brand_id'>$brand_name</option>";
            } ?>

          </select>
        </div>
</div>







 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Price</label>  
  <div class="col-md-4">
  <input placeholder="Product Price" class="form-control input-md" name="product_price"  type="text">
    
  </div>
</div>
 

 
<div class="form-group">
  <label class="col-md-4 control-label">Product Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="product_description" ></textarea>
  </div>
</div>




<div class="form-group">
<label class="col-md-4 control-label">Product Available</label>
<div class="col-md-4">
<select class="form-control input-md"  name="stock" >
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>

 
 
<div class="form-group" >
  <label class="col-md-4 control-label">Product Image</label>
  <div class="col-md-4">
    <input class="input-file" type="file" name="product_image"><br>
    <button class="btn btn-primary control-label" name="ProductSubmit" type="submit" >Product Added</button>

    
  </div>
</div>

 
</form>
</div>
 </body>
 </html>
