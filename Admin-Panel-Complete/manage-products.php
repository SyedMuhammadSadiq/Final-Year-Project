<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
 
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

 
</head>

<body>
	 	<?php include('pagination/header.php');?> 
	 	<?php include('pagination/sidemenu.php');?>

		
 
 <!--<body class="bg-info">
<div class="container"> 
	<div class="row justify-content-center">
		<div class="col-md-10 bg-light rounded my-2 py-2"> -->
			 
	  <div class="col-sm-10"style="float: right; " >

								<table class="table table-bordered" style="font-size: 14px;"> 
									<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th >Product Name</th>
					<th style="width: 10px;">Product Price</th>
					<th  >Product Description</th>
					<th>Stock</th>
					<th style="width: 7px;">Product Image</th>
					<th>Category Name</th> 
					<th>Brand Name</th> 
					<th>Action</th>
				</tr>
			</thead>
		  <tbody>
		  	<?php 
		  	   include('include/db.php');
		  	   $sql = "select products.*,category.category_name,brands.brand_name from products join category on category.category_id=products.categorys_id join brands on brands.brand_id=products.brands_id";
		  	   $res=$conn->query($sql);
		  	   $i = 0;
		  	     while ($row=$res->fetch_assoc()){
		  	
		  		$product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_price = $row['product_price'];
                        $product_description = $row['product_description'];
                        $stock = $row['stock'];
                        $product_image = $row['product_image'];
                       // $category_name = $row['category_name'];
                        //$Brand_name = $row['brand_name'];
                        $category_name = $row['category_name'];
                        $brand_name = $row['brand_name'];
                        $i++;
                              ?>         
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td style="width: 150px;"><?php echo $product_name; ?></td>
                        <td><?php echo $product_price; ?></td>
                        <td><?php echo $product_description; ?></td>
                        <td><?php echo $stock; ?></td>
                        <td><img src="product_images/<?php echo $product_image; ?>" width="60" height="40"/></td>
                        <td><?php  echo $category_name; ?></td>  
                   	     
                        <td  ><?php  echo $brand_name; ?></td>  

                        

    <td><a class="btn btn-primary" href="update_product.php?update_product=<?php  echo $product_id; ?>">Update</a>
                        <a class="btn btn-danger"  href="delete_product.php?delete_product=<?php echo $product_id; ?>">Delete</a></td>

                     
                      


					</tr>
					                           
  <?php } ?>
		  </tbody>
		</table>

	</div>
	</div>
</div>








<script type="text/javascript">
	$(document).ready(function(){
		$('table').DataTable();
		// searching:true,
		// ordering:false,
		// paging:true

	});

</script>



</body>
</html>
