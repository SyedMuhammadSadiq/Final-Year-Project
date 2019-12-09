 <?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "comfort_mart");

 if(strlen($_SESSION['admin_email'])==0)
  { 
    header('location:index.php');
    }
    else{
    $oid=$_GET['oid'];
    
//echo "chal raha hai else part";

if(isset($_POST['submit22'])){
  $status=$_POST['status'];
  $remark=$_POST['remark']; 
  //echo "chal raha hai else k andar if part";
  $query=mysqli_query($conn,"INSERT INTO `ordertrackhistory`(`uniqueId`, `status`, `remark`) VALUES ('$oid','$status','$remark')");
  $sql=mysqli_query($conn,"UPDATE orders set orderStatus='$status' where uniqueId='$oid'");
  if($query==1 && $sql ==1){
    echo "<script>alert('Order updated sucessfully...'); window.location.href = 'pending-orders.php';</script>";
    
  }
  else{
    echo "<script>alert('Order updated unsccess...'); window.location.href = 'pending-orders.php';</script>";
  }
  //echo "string";  
  //header('location: index.php');
  //}
}

 ?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  

 <!--action="updateorder.php?oid=<?php// echo $oid; ?>" -->
    <form name="submit"  action="updateorder.php?oid=<?php echo $oid; ?> " method="post" >  
    <!-- <form name="submit" target="_self" action="updateorder.php?oid=<?php //echo $oid; ?>"   method="post" >  -->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">X </button>
      <h1>Order Details</h1>
    </div>
    <div class="modal-body">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <b>Order Id :</b> <b><?php echo $oid;?></b>
        </div>



 <?php 
$ret = mysqli_query($conn,"SELECT * FROM ordertrackhistory WHERE uniqueId='$oid'");
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



   
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
   <?php } ?>
   <?php 
$st='Delivered';
   $rt = mysqli_query($conn,"SELECT * FROM orders WHERE uniqueId='$oid'");
  
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
        <tr><!--<td colspan="2" ><b >
      Product Delivered </b></td>-->
      <div class="panel-heading text-center">
          <b>Product has been Delivered :</b>
        </div>
   <?php }else  {
      ?>
   <br>
    <tr height="50">
      <td class="fontkink1">Status: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required="required" >
          <option value="">Select Status</option>
                 <option value="in Process">In Process</option>
                  <option value="Delivered">Delivered</option>
        </select><br><br>
        </span></td>
      </tr>

      <tr style=''>
            <td class="fontkink1" ><b style="padding : 10px; margin-top: 20px; float: left;">Remark:</b></td>
            <td class="fontkink" align="justify" ><span class="fontkink">
            <textarea cols="50" rows="7" name="remark"  required="required" ></textarea>
        </span></td>
    </tr>
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>
           <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit22" id="submit" class="btn btn-success"  value="update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;  </td>  
           </tr> 
      
      <!--<div class="modal-footer">
        <div class="panel-footer">
  <input type="submit" name="submit2"  value="update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;
            <div class="col-xs-10" id="lblstatus"></div>
        </div>
      </div>-->
    
<?php } ?>
 
 </tr></tr></div></div>
 </form>








       
    

</body>
</html>
<?php } ?>

<!--
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

-->