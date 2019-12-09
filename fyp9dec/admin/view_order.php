 <?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "comfort_mart");

  
 if(strlen($_SESSION['admin_email'])==0)
  { 
header('location:index.php');
}
else{

date_default_timezone_set('Asia/Karachi'); 
$currentTime = date( 'd-m-Y h:i:s A', time () );

$uniid = $_REQUEST['oid'];


?>




<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
    

 <!--action="updateorder.php?oid=<?php// echo $oid; ?>" -->
  <div >
     <div class="modal-header" >
      <button type="button" class="close" data-dismiss="modal">X </button>
      <h1>Order Products</h1>
    </div>
    
                

                <table class="table table-bordered"  style="font-size: 18px; " > 
                  <thead class="thead-dark">
                      
                    <tr >
    
                      <th>#</th>
                      
                      <th>Product </th>
                      <th>Image</th>
                      <th>Quantity </th>
                      <th>Total Amount </th>
                       
                      
                      
                    </tr>
                  </thead>
                  <tbody >

<?php 
 $status='Delivered';
 

$query=mysqli_query($conn,"
          SELECT  products.name as productname, 
                  orders.quantity as quantity,
                  products.price as productprice,
                  products.image as productimage,
                  orders.uniqueId as id  
                  from orders join user on  orders.userId=user.id 
                  join products on products.id=orders.productId 
                  where  orders.uniqueId = '$uniid'");
  
  //
 $cnt=1;
 $totalPrice=0;
while($row=mysqli_fetch_array($query))
{

  
?>                    
                    <tr >
                      <td><?php echo $cnt;?></td>
                       
                      <td><?php echo $row['productname'];?></td> 
                      <td><img src="product_images/<?php echo $row['productimage']; ?>" width="60" height="40"/></td> 
                      <td><?php echo $row['quantity'];?></td>
                      <td><?php echo $a = $row['quantity']*$row['productprice'];?></td> 

                      
                      </tr>


                    <?php $cnt=$cnt+1; $totalPrice+=$a; } ?>
                        
                  </tbody>  
                </table>
                    <div><h4><b>Total Amount : <?php echo $totalPrice ?></b></h4> </div>
 
 
</body>
</html>
<?php } ?>



<script type="text/javascript">
$('#theModal').on('hidden.bs.modal', function () { 
    location.reload();
});



 
 </script> 


 
 