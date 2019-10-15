<?php
 $conn = mysqli_connect("localhost", "root", "", "userregister"); 

	if (isset($_POST['updateProduct'])) {

 			//$update_id=$_POST['product_id'];
			$update_id = 'product_id';

 		    $productname=$_POST['product_name'];
 		    // $brands_id=$_POST['brands_id'];
            $brands_id=$_POST['brands_id'];
            $product_price=$_POST['product_price'];
            $product_description=$_POST['product_description'];
            //$categorys_id=$_POST['categorys_id'];
            $stock = $_POST['stock'];
            $productimage=$_FILES['product_image']['name'];
            $tmp = $_FILES['product_image']['tmp_name'];
            move_uploaded_file($tmp, "product_images/$productimage");
            

 
          $update_product= "UPDATE products set product_name='$productname' , brands_id ='$brands_id', product_price='$product_price', product_description='$product_description', stock = '$stock' , product_image = '$productimage' where product_id='$update_id'";

		$run_product = mysqli_query($conn, $update_product);

		if ($run_product) {

			echo "<script>alert('Product has been updated!')</script>";
			echo "<script>window.open('manage-products.php', '_self')</script>";

		}
		else{

              echo "<script>alert('Product has not been updated!')</script>";
			}
		}

?>




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
$conn = mysqli_connect("localhost", "root", "", "userregister");

	if (isset($_GET['update_product'])) {

		$get_id = $_GET['update_product'];

		$get_product = "select * from products where product_id='$get_id'";

		$run_product = mysqli_query($conn, $get_product);

	 
		$row_product  = mysqli_fetch_array($run_product);


					              $product_id = $row_product['product_id'];
                        $product_name = $row_product['product_name'];
                        $product_price = $row_product['product_price'];
                        $product_description = $row_product['product_description'];
                        $stock = $row_product['stock'];
                        $product_image = $row_product['product_image'];
                       // $category_name = $row['category_name'];
                        //$brand_name = $row['brand_name'];
                       // $category_name = $row['category_name'];
                        $brands_id = $row_product['brands_id'];


	//	$get_category = "select * from category where category_id='$product_category'";

	//	$run_category = mysqli_query($conn, $get_category);

	//	$row_category = mysqli_fetch_array($run_category);

	//	$category_id = $row_category['category_name'];



 // $get_brand="select * from brands INNER JOIN products ON brands.brand_id = products.brands_id ";
		$get_brand = "select * from brands where brand_id='$brands_id'";

		$run_brand = mysqli_query($conn, $get_brand);

		$row_brand = mysqli_fetch_array($run_brand);
    
		$brand_name = $row_brand['brand_name'];
	}
	?>


  <div class="main">
<form class="form-horizontal" method="POST"   enctype="multipart/form-data" >


 
 
<!--<div class="form-group">
  <label class="col-md-4 control-label"  >Category</label>  
  <div class="col-md-4" class="form-group">
  
  <select class="form-control input-md" name="categorys_id"> 
                     <option>Select a Category..</option>

               <?php  
                   
                   // $query=mysqli_query($conn,"select * from category ");
                       
                      //while($row_category=mysqli_fetch_array($query))
                      {
                       
                      //$category_id = $row_category['category_id'];
                     // $category_name = $row_category['category_name'];    
                     //  echo "<option value='$category_id'>$category_name</option>";         
                   
                     
                    } ?>

 
                    </select>
   </div>
    </div> -->


 


 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Name</label>  
  <div class="col-md-4">
  <input placeholder="Product Name" class="form-control input-md" name="product_name"  type="text" value="<?php echo $product_name; ?> ">
    
  </div>
</div>





      <div class="form-group">
           <label class="col-md-4 control-label" >Brand Name</label>
             <div class="col-md-4" class="form-group">

           <select  class="form-control input-md" name="brands_id">
            <option><?php echo $brand_name;?></option>
            <?php
            $get_brands = "select * from brands";

            $run_brands = mysqli_query($conn, $get_brands);

            while ($row  = mysqli_fetch_array($run_brands)) {

              $brand_id = $row['brand_id'];
              $brand_name = $row['brand_name'];

              echo "<option value='$brand_id'>$brand_name</option>";
            } ?>

          </select>
        </div>
</div>







 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Price</label>  
  <div class="col-md-4">
  <input placeholder="Product Price" class="form-control input-md" name="product_price"  type="text" value="<?php echo $product_price; ?>">
    
  </div>
</div>
 

 
<div class="form-group">
  <label class="col-md-4 control-label">Product Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="product_description" value="<?php echo $product_description; ?>" ></textarea>
  </div>
</div>




<div class="form-group">
<label class="col-md-4 control-label">Product Available</label>
<div class="col-md-4">
<select class="form-control input-md"  name="stock" value="<?php echo $stock; ?>" >
<option value="In Stock">In Stock</option>
<option value="Out of Stock">Out of Stock</option>
</select>
</div>
</div>

 
 
<div class="form-group" >
  <label class="col-md-4 control-label">Product Image</label>
  <div class="col-md-4">
    <input class="input-file" type="file" name="product_image" value="<img src="product_images/<?php echo $product_image; ?>/>

    <br>
     
    <button class="btn btn-primary control-label" name="updateProduct" type="submit" >Product Update</button>

    
  </div>
</div>






</body>
</html>