<?php include('header.php'); ?>
<?php include('left-navbar.php') ?>
<?php 

	if (isset($_REQUEST['id'])) {

		$category_id = $_REQUEST['id'];
		$category = $pdo->select('category', ['*'], 'where id = ?', [$category_id]);

		if (count($category['result']) > 0) {

			$products = $pdo->select('products', ['*'], 'where categorys_id = ?', [$category_id]);
			echo "<pre>";
			print_r($products);exit;

		}
		die('mamo');



	}
?>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner7">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3>Beverages</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>soft drinks</h6>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/49.png" alt=" " class="img-responsive" /></a>
											<p>Olper Milk (250 ml)</p>
											<h4>RS 35 </h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value=" " />
													<input type="hidden" name="add" value=" " />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="olper milkk" />
													<input type="hidden" name="amount" value=" " />
													<input type="hidden" name="discount_amount" value=" " />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/56.png" alt=" " class="img-responsive" /></a>
											<p>Olper 1 Ltr</p>
											<h4>RS 135</h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value=" " />
													<input type="hidden" name="add" value=" " />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="red bull energy drink" />
													<input type="hidden" name="amount" value=" " />
													<input type="hidden" name="discount_amount" value=" " />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<?php include('footer.php'); ?>


</body>
</html>
