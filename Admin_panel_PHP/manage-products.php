<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?>
  <div class="main">

								<table class="table table-bordered"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th>Product Name</th>
											<th style="width: 15px;">Product Price</th>
											<th>Product Description</th>
											<th>Stock</th>
											<th style="width: 10px;">Product Image</th>
											<!--<th>Category Name</th>  -->
											<th>Brand Name</th> 
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
									  <!--
										<tr>
											<td>1</td>
											<td>Pepsi Diet</td>
											<td>Beverages</td>
											<td>Soft Drinks</td>
											<td>Pepsi</td>
											<td><a href="">update </a> OR delete</td>
										</tr>
										-->
											


 <?php  
 
                    $conn = mysqli_connect("localhost", "root", "", "userregister");
                 //   $query=mysqli_query($conn ,"select * from products" );
                    							



//$sql="select * from brands INNER JOIN products ON brands.brand_id = products.brands_id "; //
// $sql = "select category.category_name, brands.brand_name from category and brands full outer join userregister on products.categorys_id = userregister.categorys_id, userregister.brands_id"                   

// right query for brand_name :
           $sql="select * from brands INNER JOIN products ON brands.brand_id = products.brands_id ";
           


           //  $sql="select * from brands,category INNER JOIN products ON brands.brand_id = products.brands_id , categorys.category_id = products.categorys_id ";



//$sql="SELECT products.*, brands.*, category.* FROM ((brands INNER JOIN products ON brands.brand_id = products.brands_id)
//(category INNER JOIN products ON category.category_id = products.categorys_id) )";



//select * from category INNER JOIN products ON category.cateogry_id = products.cateogry_id "


//$sql ="SELECT * FROM products
//JOIN brands ON products.product_id = brands.brands_id 
//JOIN category ON products.product_id = category.categorys_id";


  // $sql = "SELECT products.product_id, brands.brand_name, category.category_name
//FROM ((products
//INNER JOIN brands ON products.brands_id = brands.brand_id)
//INNER JOIN category ON products.categorys_id = category.category_id);"








//$sql ="SELECT * from products a inner join brands   on a.brands_id = b.brands_id  inner join  category c  on a.categorys_id = c.category_id";



$query = mysqli_query($conn,$sql);

?>



<?php
                     if(mysqli_num_rows($query) > 0) {
			          
			          $i = 0;
			         while($row=mysqli_fetch_array($query))  
                      { 
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_price = $row['product_price'];
                        $product_description = $row['product_description'];
                        $stock = $row['stock'];
                        $product_image = $row['product_image'];
                       // $category_name = $row['category_name'];
                        //$Brand_name = $row['brand_name'];
                      //  $category_name = $row['category_name'];
                        $brand_name = $row['brand_name'];
                        $i++;
                              ?>         
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $product_name; ?></td>
                        <td><?php echo $product_price; ?></td>
                        <td><?php echo $product_description; ?></td>
                        <td><?php echo $stock; ?></td>
                        <td><img src="product_images/<?php echo $product_image; ?>" width="60" height="60"/></td>
                     <!--  <td><?php  //echo $category_name; ?></td>  -->
                   	     
                        <td  ><?php  echo $brand_name; ?></td>  

                        


                        <td><a class="btn btn-primary" href="update_product.php?update_product=<?php echo $product_id; ?>">Update</a>
                        <a class="btn btn-danger"  href="delete_product.php?delete_product=<?php echo $product_id; ?>">Delete</a></td>


                      
                            <?php }} ?>
 

					</tr>
									
										 

									</tbody>
								</table>

		</div>
<?php include('include/footer.php');?>

</body>
</html>