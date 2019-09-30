

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
  <label class="col-md-4 control-label" >Category</label>  
  <div class="col-md-4">
  
  <select class="form-control input-md"> 
  <option>Grocery</option>
  <option>Ice Creams</option>
  <option>Biscuits</option>
  </select>
    
  </div>
</div>

 
<div class="form-group">
  <label class="col-md-4 control-label">Sub Category
  </label>  
  <div class="col-md-4">
  
  <select class="form-control input-md"> 
  <option>Rice</option>
  <option>Cone Ice Creams</option>
  <option>Tuc</option>
  </select>
    
  </div>
</div>

 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Name</label>  
  <div class="col-md-4">
  <input placeholder="Product Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>

 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">Brand Name</label>
  <div class="col-md-4">
    <input placeholder="Brand Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>

 
<div class="form-group">
  <label class="col-md-4 control-label" >Product Price</label>  
  <div class="col-md-4">
  <input placeholder="Product Price" class="form-control input-md" required="" type="text">
    
  </div>
</div>
 

 
<div class="form-group">
  <label class="col-md-4 control-label">Product Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" ></textarea>
  </div>
</div>
 
 
<div class="form-group">
  <label class="col-md-4 control-label">Product Image</label>
  <div class="col-md-4">
    <input class="input-file" type="file"><br>
    <button class="btn btn-primary control-label">Update</button>
  </div>
</div>

 
</fieldset>
</form>
</div>
<?php include('include/footer.php');?>



</body>
</html>