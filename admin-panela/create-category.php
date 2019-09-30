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
<form class="form-horizontal">
<fieldset>
 
<div class="form-group">
  <label class="col-md-4 control-label" >Category Name</label>  
  <div class="col-md-4">
  <input placeholder="Enter Category Name" class="form-control input-md" required="" type="text"><br>
  <button class="btn btn-primary control-label">Create</button>
  </div>
</div>
  
    
 
<br><br>
								<table class="table table-bordered"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th>Category</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
						
										<tr>
											<td>1</td>
											<td>Beverages</td>
											<td><a href="">update </a> OR delete</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Ice Cream</td>
											<td><a href="">update </a> OR delete</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Biscuits</td>
											<td><a href="">update </a> OR delete</td>
										</tr>
										 

									</tbody>
								</table>
	</div>
	<?php include('include/footer.php');?>

				 
</fieldset>
</form>
</body>