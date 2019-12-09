<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "comfort_mart");
$oid=$_GET['oid'];
 ?>

 
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

 


    <form method="post" >  

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">X </button>
      <h1>Order Tracking Details</h1>
    </div>
    <div class="modal-body">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <b>Order Id :</b> <b><?php echo $oid;?></b>
        </div>
 <?php 
$ret = mysqli_query($conn,"SELECT * FROM ordertrackhistory WHERE uniqueId='$oid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while($row=mysqli_fetch_array($ret))
      {
     ?>
    
    
    <br>
      <tr height="20">
      <td class="fontkink1" ><b>At Date: </b></td>
      <td  class="fontkink"><?php echo $row['postingDate'];?></td>
    </tr><br>
     <tr height="20">
      <td  class="fontkink1"><b>Status: </b></td>
      <td  class="fontkink"><?php echo $row['status'];?></td>
    </tr><br>
     <tr height="20">
      <td  class="fontkink1"><b>Remark: </b></td>
      <td  class="fontkink"><?php echo $row['remark'];?></td>
    </tr>
 
   <?php }}
 else{
   ?>
   <tr>
   <td colspan="2">Order Not Process Yet</td>
   </tr>
   <?php  }
$st='Delivered';
   $rt = mysqli_query($conn,"SELECT * FROM orders WHERE uniqueId='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
   <tr><td colspan="2"><b>
      Product Delivered successfully </b></td>
   <?php } 
 
  ?>
 
 
 </form>
 

</body>
</html>


