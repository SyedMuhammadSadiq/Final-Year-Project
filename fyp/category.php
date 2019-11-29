 





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

<!-- new page for products -->


<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-md-3 sidebar'> 
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ========================================= -->
            <div class="sidebar-widget wow fadeInUp round-top">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                <h4 class="widget-title">Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseOne" data-toggle="collapse" class="accordion-toggle collapsed"> Camera </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseTwo" data-toggle="collapse" class="accordion-toggle collapsed"> Desktops </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseThree" data-toggle="collapse" class="accordion-toggle collapsed"> Pants </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseFour" data-toggle="collapse" class="accordion-toggle collapsed"> Bags </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseFive" data-toggle="collapse" class="accordion-toggle collapsed"> Hats </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#collapseSix" data-toggle="collapse" class="accordion-toggle collapsed"> Accessories </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          <li><a href="#">gaming</a></li>
                          <li><a href="#">office</a></li>
                          <li><a href="#">kids</a></li>
                          <li><a href="#">for women</a></li>
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group --> 
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp no-round">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">100Rs</span> <span class="pull-right">1000Rs</span> </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider" value="" >
                </div>
                <!-- /.price-range-holder --> 
                <a href="#" class="lnk btn btn-primary">Show Now</a> </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== -->         
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
      
        
      <div class="page-title"><h2>Categories</h2></div>
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-12 col-md-12">
             
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                </div>
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
             <!--  <div class="col col-sm-3 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Show</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> 1 <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">1</a></li>
                        <li role="presentation"><a href="#">2</a></li>
                        <li role="presentation"><a href="#">3</a></li>
                        <li role="presentation"><a href="#">4</a></li>
                        <li role="presentation"><a href="#">5</a></li>
                        <li role="presentation"><a href="#">6</a></li>
                        <li role="presentation"><a href="#">7</a></li>
                        <li role="presentation"><a href="#">8</a></li>
                        <li role="presentation"><a href="#">9</a></li>
                        <li role="presentation"><a href="#">10</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld --> 
                <!-- </div> -->
                <!-- /.lbl-cnt  
              <!-- </div> --> 
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6 text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline --> 
              </div>
              <!-- /.pagination-container --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>

        <?php if (!empty($all_products['result'])) { ?>
        <div class="search-result-container">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row">
                <?php foreach ($all_products['result'] as $key => $value) { ?>
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image img-responsive"> <a href="javascript:void(0);">
                            <img src="admin/product_images/<?php echo($value->image); ?>">
                                              </a> 
                          </div>
                          <!-- /.image -->
                          
                    
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="javascript:void(0);"><?php echo $value->name; ?></a></h3>
                          <div class="rating rateit-small"></div>
                          <div class="description"></div>
                          <div class="product-price">                                   
                            <span class="price"><?php echo $value->price; ?>&nbsp;PKR</span> 
                            <!-- <span class="price-before-discount">$800</span>  --></div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li  class="lnk wishlist" >
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
                      <!-- /.product --> 
                      
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.item -->
                  
                 <?php } ?>
                <!-- /.row --> 
              </div>
              <!-- /.category-product --> 
              
            </div>
            <!-- /.tab-pane -->         
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
 </div>
  <!-- /.container --> 
  <?php } ?>
</div>
</div>
<?php include('layouts/footer.php'); ?>