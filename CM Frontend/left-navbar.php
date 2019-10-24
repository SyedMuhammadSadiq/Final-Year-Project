<?php 

$pdo = new pdocrudhandler();
$categories = $pdo->select('category', ['*'], 'where parent_id = ?', [0]);

$all_category = [];
foreach ($categories['result'] as $key => $category) {

		$category = json_decode(json_encode($category), true);
		$child_category = $pdo->select('category', ['*'], 'where parent_id = ?', [$category['id']]);
		if ($child_category['rowsAffected'] > 0) {

			$category['childrens'] = $child_category['result'];
		}
		array_push($all_category, $category);
}

?>

<div class="banner">
	<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
			  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav nav_1">
					<?php foreach ($all_category as $key => $item) { ?>
						<?php if (isset($item['childrens'])) { ?>
							<?php if (count($item['childrens']) > 0) { ?>
								<li class="dropdown mega-dropdown active">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?php echo $item['name'] ?><span class="caret"></span></a>				
									<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
										<div class="w3ls_vegetables">
											<ul>	
												<?php foreach ($item['childrens'] as $child) { ?>
													<li><a href=category.php?id=<?php echo($item['id']) ?>'><?php echo $child->id; ?>><?php echo $child->name; ?></a></li>
												<?php } ?>
											</ul>
										</div>                  
									</div>				
								</li>
							<?php } ?>
						<?php } else { ?>
							<li><a href='category.php?id=<?php echo($item['id']) ?>'><?php echo $item['name']; ?></a></li>
						<?php } ?>
					<?php } ?>
				</ul>
			 </div>
		</nav>
	</div>
</div>