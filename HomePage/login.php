
<?php 

require_once('autoload.php');
// $_pdo = new pdocrudhandler();
// $customers = $_pdo->select('customer',array('*'), 'where password = ?', [12345]);
// $customers = $_pdo->select('customer',array('name, password'), 'where password = ?', [12345]);
// $customers = $_pdo->update('customer',['name' => 'Nazir'], 'where password = ?', [12345]);
// $customers = $_pdo->delete('customer','where name = ?',['Nazir']);
// $customers = $_pdo->insert('customer', [
// 						'name'	=> 'amos',
// 						'email'	=> 'amos@golpik.com',
// 						'password'	=> '12345',
// 						'number'	=> '09007801',
// 						'address'	=> 'kaneez fatima karachi'
// 					]);


if (isset($_POST['submit'])) {

	$user = new user();
	if ($user->login($_POST['email'], $_POST['password'])) {
		header('location: index.php');
	} else {

		die('invalid');
	}
}


?>
<?php include('header.php'); ?>
<?php include('left-navbar.php') ?>

		<div class="w3l_banner_nav_right">
<!-- login -->
		<div class="w3_login">
			<h3>Sign In & Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
				  </div>
				  <div class="form">
					<h2>Login to your account</h2>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					  <input type="email" name="email" placeholder="Username" required=" ">
					  <input type="password" name="password" placeholder="Password" required=" ">
					  <input type="submit" name="submit" value="Login">
					</form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<form action="javascript:void(0);" method="post">
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="email" name="Email" placeholder="Email Address" required=" ">
					  <input type="text" name="Phone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register">
					</form>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
			<script>
				$('.toggle').click(function(){
				  // Switches the Icon
				  $(this).children('i').toggleClass('fa-pencil');
				  // Switches the forms  
				  $('.form').animate({
					height: "toggle",
					'padding-top': 'toggle',
					'padding-bottom': 'toggle',
					opacity: "toggle"
				  }, "slow");
				});
			</script>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- newsletter-top-serv-btm -->
	<div class="newsletter-top-serv-btm">
		<div class="container">
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</div>
				<h3>Shop Easily</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-bar-chart" aria-hidden="true"></i>
				</div>
				<h3>Pay Easily</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="col-md-4 wthree_news_top_serv_btm_grid">
				<div class="wthree_news_top_serv_btm_grid_icon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<h3>Deliver Easily</h3>
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
					saepe eveniet ut et voluptates repudiandae sint et.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter-top-serv-btm -->
<?php include('footer.php'); ?>


