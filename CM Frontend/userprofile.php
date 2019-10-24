<?php

    include "config.php";


    

   if(isset($_POST['Update'])){
        $name= $_POST['name'];
        $num= $_POST['num'];
        $address= $_POST['address'];
        $reEnterPassword= $_POST['pass'];
        $currentPassword= $_POST['cpass'];
    
        $sql2 = "UPDATE `user` SET `name`='$name',`contactno`='$num', `shippingaddress` = '$address' , `password` ='$pass' where `email` = '$sessionEmail' ";
        // echo $sql2;
        // die();
        $result2 = mysqli_query($conn,$sql2);
        if($result2){
            echo "<script> alert('Update user profile Successfully'); window.location = 'my-account.php'; </script>";
        } else{
            echo "<script> alert('ERROR: in updating profile'); </script>";
        }
    }
?>
<body>
<?php include('header.php'); ?>

<?php include('left-navbar.php'); ?>

				<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3>UPDATE PROFILE</h3>
    
				<div class="container row" style="padding: 30px;">
					<div class="col-md-1"></div>

					<div class="col-md-8">
			  <form class="form-horizontal" action="#">
    				<div class="form-group">
      					<label class="control-label col-sm-2" for="cname">Name:</label>
      						<div class="col-sm-10">
        					<input type="text" class="form-control form-group" id="name" placeholder="Enter Your Name" name="name">
      						</div>
    				</div>
    
    				<div class="form-group">
     					<label class="control-label col-sm-2" for="pwd">Number:</label>
     						<div class="col-sm-10">          
      						<input type="number" class="form-control form-group" id="num" placeholder="Enter Your Number" name="num">
      						</div>
    				</div>

    				<div class="form-group">
     					<label class="control-label col-sm-2" for="pwd">Address:</label>
     						<div class="col-sm-10">          
      						<input type="text" class="form-control form-group" id="address" placeholder="Enter Your Address" name="address">
      						</div>
    				</div>

    				<div class="form-group">
     					<label class="control-label col-sm-2" for="pwd">Password:</label>
     						<div class="col-sm-10">          
      						<input type="password" class="form-control form-group" id="pass" placeholder="Enter Your Password" name="pass">
      						</div>
    				</div>

    				<div class="form-group">
     					<label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
     						<div class="col-sm-10">          
      						<input type="password" class="form-control form-group" id="cpass" placeholder="Enter Your Password Again" name="cpass"><span id='message'></span>
      						</div>
    				</div>
    
    
    				
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="Update">Update</button>
      </div>
    </div>
  </form>
</div>
</div>
<div class="col-md-2"></div>
				</div>

<?php include('footer.php'); ?>
</body>

<script type="text/javascript">

$('#pass, #cpass').on('keyup', function () {
  if ($('#pass').val() == $('#cpass').val()) {
    $('#message').html('Password Match').css('color', 'green');
  } else 
    $('#message').html('Password Not Match!!!').css('color', 'red');
});

</script>