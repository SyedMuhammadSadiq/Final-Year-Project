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
<form class="form-horizontal" >
<fieldset>
 
<div class="form-group">
  <label class="col-md-4 control-label" >Category</label>  
  <div class="col-md-4">
  
  <select class="form-control input-md"> 
  <option> </option>
  <option> </option>
  <option> </option>
  </select>
    
  </div>
</div>

 
<div class="form-group">
  <label class="col-md-4 control-label" >Sub Category</label>  
  <div class="col-md-4">
  <input placeholder="Enter Sub Category Name" class="form-control input-md" required="" type="text"> <br>
  <button class="btn btn-primary control-label">Create</button>
 </div>
</div>




 <br><br><br>
								<table class="table table-bordered"> 
									<thead class="thead-dark">
										  
										<tr>
		
											<th>#</th>
											<th>Category</th>
											<th>Sub Category Name </th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
						
										<tr>
											<td>1</td>
											<td>Beverages</td>
											<td>Rice</td>
											<td><a href="">update </a> OR delete</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Ice Cream</td>
											<td>Cone Ice Cream</td>
											<td><a href="">update </a> OR delete</td>
											
										</tr>
									
										 

									</tbody>
								</table>
 
				 
</fieldset>
</form>
</div>
<?php include('include/footer.php');?>
</body>
</html>