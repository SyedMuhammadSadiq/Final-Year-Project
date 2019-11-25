 





<!-- code for add to cart -->
<?php
session_start();
error_reporting(0);
   $conn = mysqli_connect("localhost", "root", "", "comfort_mart");
 $cid=intval($_GET['id']);
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($conn,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$value=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$value['id']]=array("quantity" => 1, "price" => $value['price']);
			header('location:my-cart.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
// COde for Wishlist
 
?>





<?php require('./autoload.php'); ?>
<?php include('layouts/header.php'); ?>


<?php 
    
	if (isset($_REQUEST['id'])) {
			
		$parent_id = $_REQUEST['id'];
	    $categories_sidesbars = (new category())->getParentCategories($parent_id);

	    $all_category_sidesbar = [];
	    if ($categories_sidesbars['rowsAffected'] != 0) {

		    foreach ($categories_sidesbars['result'] as $key => $category) {

		            $category = json_decode(json_encode($category), true);
		            $child_category = $pdo->select('category', ['*'], 'where parent_id = ?', [$category['id']]);
		            if ($child_category['rowsAffected'] > 0) {

		                $category['childrens'] = $child_category['result'];
		            }
		            array_push($all_category_sidesbar, $category);
		    }
	    }

	    $category_id = $_REQUEST['id'];
	    $all_products = (new product)->getProducts($category_id);

	}

?>

    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <!-- Categories -->
        <div class="container">
            <div class="row">
                <?php if (count($all_category_sidesbar) > 0) { ?>
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <div class="side-menu animate-dropdown outer-bottom-xs">
                        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
                        <nav class="yamm megamenu-horizontal">
                            <ul class="nav">
                            <?php foreach ($all_category_sidesbar as $key => $item) { ?>
                                <?php if (isset($item['childrens'])) { ?>
                                    <?php if (count($item['childrens']) > 0) { ?>
                                        <li class="dropdown menu-item"> 
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon fa fa-shopping-bag" aria-hidden="true"></i><?php echo $item['name'] ?>
                                            </a>
                                            <ul class="dropdown-menu mega-menu">
                                                <li class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-3">
                                                            <ul class="links list-unstyled">
                                                                <?php foreach ($item['childrens'] as $child) { ?>
                                                                    <li><a href='category.php?id=<?php echo $child->id; ?>'><?php echo $child->name; ?></a></li>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                <?php } else { ?>
                                    <li class="menu-item"> <a href='category.php?id=<?php echo $item['id']; ?>'><?php echo $item['name']; ?></a> 
                                <?php } ?>
                            <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        <!-- products -->
        <?php if (!empty($all_products['result'])) { ?>
	        <div class="container">
	            <section class="section featured-product wow fadeInUp">
	                <h3 class="section-title">New products</h3>
	                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
	                    <?php foreach ($all_products['result'] as $key => $value) { ?>
	                    <div class="item item-carousel">
	                        <div class="products">
	                            <div class="product">
	                                <div class="product-image">
	                                    <div class="image">
	                                        <a href="javascript:void(0);">
	                                       <!-- product image get --> 	<img src="admin/product_images/<?php echo($value->image); ?>">
	                                        </a>
	                                    </div>
	                                </div>
	                                <div class="product-info text-left">
		
	                                  <!-- product name get -->    <h3 class="name"><a href="javascript:void(0);"><?php echo $value->name; ?></a></h3>
	                                    <div class="rating rateit-small"></div>
	                                    <div class="description"></div>
	                                    <div class="product-price"> 
	                                  <!-- product price get -->    	<span class="price"><?php echo $value->price; ?>&nbsp;PKR</span> 
	                                    	<!-- <span class="price-before-discount">$800</span>  -->
	                                    </div>
	                                </div>
	                                <!-- /.product-info -->
	                                <div class="cart clearfix animate-effect">
	                                    <div class="action">
	                                        <ul class="list-unstyled">
	                                            <li  class="lnk wishlist" >

	                                           <!--href="category.php?page=product&action=add&id=<?php// echo $value->id; ?>"-->
	                                                <!--<a class="add-to-cart" <?php //echo $value->id; ?> title="Add to cart"><i class="fa fa-shopping-cart"></i> </a>-->
	                                              <a class="add-to-cart" href="category.php?page=product&action=add&id=<?php echo $value->id; ?>" title="Add to cart"><i class="fa fa-shopping-cart"></i> </a> 
	                                            </li>

	                                            <li class="lnk wishlist">
	                                                <a class="add-to-cart" href="javascript:void(0);" title="Wishlist"> <i class="icon fa fa-heart"></i> </a>
	                                            </li>
	                                            
	                                        </ul>
	                                    </div>
	                                    <!-- /.action -->
	                                </div>
	                                <!-- /.cart -->
	                            </div>
	                        </div>
	                    </div>
	                    <?php } ?>
	                </div>
	            </section>
 
	        </div>
    	<?php } else { ?>
    		<div class="container">
    			<div class="row">
					<div class="alert alert-info">
						No product(s) available
					</div>
    			</div>
    		</div>
    	<?php } ?>
    </div>
<?php include('layouts/footer.php'); ?>