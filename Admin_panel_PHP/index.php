<?php include('include/header.php');?>
<?php include('include/sidemenu.php');?>



<!DOCTYPE html>
<html>
 <head>
  <title> </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  <style>
  </style>
 </head>
 <body>


<br>
<div class="main">

<div class="form-group">

<div  class="col-md-8" class="form-group">
  <div class="form-group">


  <div class="container" style="width:900px;">
    <br /><br />
   <div class="row">
    <div class="col-md-6">
     <h3 align="center">Add New Category</h3>
     <br />
     <form method="post" id="treeview_form">
      <div class="form-group">
       <label>Select Parent Category</label>
       <select name="parent_category" id="parent_category" class="form-control">
       
       </select>
      </div>
      <div class="form-group" >
       <label>Enter Category Name</label>
      
       <input type="text" name="category_name" id="category_name" class="form-control " required> 
      </div>
      <div class="form-group">
       <input type="submit" name="action" id="action" value="Add" class="btn btn-primary" />
      </div>
     </form>
    </div>
    <div class="col-md-6">
    <!-- <h3 align="center"><u>Category Tree</u></h3> -->
     <br><br><br><br><br>

     <div id="treeview"></div> 
    </div>
   </div>
  </div> 


</div>
</div>
</div></div>





<div class="main">
        
                <table class="table table-bordered"> 
                  <thead class="thead-dark">
                      
                    <tr>
    
                      <th>#</th>
                      <th> Category Name</th>
                      <th>Action</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
            
                    <!-- 
                        <tr>
                      <td>1</td>
                      <td>Moid</td>
                      <td>moidahmed0@gmail.com</td>
                      <td>03363057355</td>
                    </tr> -->
                  
                  <?php  
 
                    $conn = mysqli_connect("localhost", "root", "", "userregister");
                    $query=mysqli_query($conn ,"select * from category");
                       $i = 0;
                      while($row=mysqli_fetch_array($query))
                      {
                        $category_id = $row['category_id'];
                        $category_name = $row['category_name'];
                        $i++;
                      ?>                  
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $category_name; ?></td>
                        <td><a class="btn btn-primary" href="update_category.php?update_category=<?php echo $category_id; ?>">Update</a>
                        <a class="btn btn-danger"  href="delete_category.php?delete_category=<?php echo $category_id; ?>">Delete</a></td>


                    <?php } ?>

                    </tr>
                      
                  

                  </tbody>
                </table>

             

</div>








 </body>
</html>
<script>
 $(document).ready(function(){

  fill_parent_category();

  fill_treeview();
  
  function fill_treeview()
  {
   $.ajax({
    url:"fetch.php",
    dataType:"json",
    success:function(data){
     $('#treeview').treeview({
      data:data
     });
    }
   })
  }

  function fill_parent_category()
  {
   $.ajax({
    url:'fill_parent_category.php',
    success:function(data){
     $('#parent_category').html(data);
    }
   });
   
  }

  $('#treeview_form').on('submit', function(event){
   event.preventDefault();
   $.ajax({
    url:"add.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
     fill_treeview();
     fill_parent_category();
     $('#treeview_form')[0].reset();
     alert(data);
    }
   })
  });
 });
</script>