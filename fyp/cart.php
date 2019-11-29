



<?php 
session_start();
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "comfort_mart"); 
 
if(isset($_POST['submit'])){
        if(!empty($_SESSION['cart'])){
        foreach($_POST['quantity'] as $key => $val){
            if($val==0){
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantity']=$val;

            }
        }
            echo "<script>alert('Your Cart hasbeen Updated');</script>";
        }
    }
// Code for Remove a Product from Cart
if(isset($_POST['remove_code']))
    {

if(!empty($_SESSION['cart'])){
        foreach($_POST['remove_code'] as $key){
            
                unset($_SESSION['cart'][$key]);
        }
            echo "<script>alert('Your Cart has been Updated');</script>";
    }
}
// code for insert product in order table


if(isset($_POST['ordersubmit'])) 
{
    
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{

    $quantity=$_POST['quantity'];
    $pdd=$_SESSION['id'];
    $values=array_combine($pdd,$quantity);


        foreach($values as $qty=> $val){



mysqli_query($conn,"insert into orders(userId,productId,quantity) values('".$_SESSION['id']."','$qty','$val')");
header('location:checkout.php');
}
}
}


?>

























<?php require('./autoload.php'); ?>
    <?php include('layouts/header.php'); ?>





        <div class="body-content outer-top-xs">
            <div class="container">
                <div>
                    <div class="shopping-cart">
                        <div class="shopping-cart-table ">
                            <div class="table-responsive">
<?php
if(!empty($_SESSION['cart'])){
    ?>
                                <table class="table" >
                                    <thead  >
                                        <tr>
                                            <th class="cart-romove item">Remove</th>  
                                            <th class="cart-description item">Image</th> 
                                            <th class="cart-product-name item" style="">Product Name</th>
                                             
                                            <th class="cart-qty item">Quantity</th>
                                            <th class="cart-sub-total item">Price Per unit</th>
                                            <th class="cart-total last-item">Grandtotal</th>
                                        </tr>
                                    </thead>
                                    <!-- /thead -->
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="shopping-cart-btn">
                                                    <span class="">
                                <a href="index.php" class="btn btn-upper btn-primary outer-left-xs">Continue Shopping</a>
                                 <input type="submit" name="submit" value="Update shopping cart" class="btn btn-upper btn-primary pull-right outer-right-xs"> 
                                <!--<a href="cart.php" name="submit" class="btn btn-upper btn-primary pull-right outer-right-xs">Update Shopping Cart</a>-->
                                <!--<button onclick="location.href='cart.php'" name="submit" class="btn btn-upper btn-primary pull-right outer-right-xs"> Update Shopping Cart </button>-->

                                  <!--<a href="cart.php" class="btn btn-upper btn-primary pull-right outer-right-xs" name="submit">Update shopping cart</a>  -->
                            </span>
                                                </div>
                                                <!-- /.shopping-cart-btn -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <tbody>

<?php
 $pdtid=array();
    $sql = "SELECT * FROM products WHERE id IN(";
            foreach($_SESSION['cart'] as $id => $values){
            $sql .=$id. ",";
            }
            $sql=substr($sql,0,-1) . ") ORDER BY id ASC";
            $query = mysqli_query($conn,$sql);
            $totalprice=0;
            $totalqunty=0;
            if(!empty($query)){
            while($value = mysqli_fetch_array($query)){
                $quantity=$_SESSION['cart'][$value['id']]['quantity'];
                $subtotal= $_SESSION['cart'][$value['id']]['quantity']*$value['price'];
                $totalprice += $subtotal;
                $_SESSION['qnty']=$totalqunty+=$quantity;

                array_push($pdtid,$value['id']);
//print_r($_SESSION['pid'])=$pdtid;exit;
    ?>
                                       <!-- <tr>
                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="assets/images/products/p1.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="rating rateit-small"></div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="reviews">
                                                            (06 Reviews)
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                            </td>
                                          //  <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td> 
                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="1">
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">$500.00</span></td>
                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$800.00</span></td>
                                        </tr> -->
                           
                           <!--             <tr>
                                            <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="detail.html">
                                                    <img src="assets/images/products/p2.jpg" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a href="detail.html">Floral Print Buttoned</a></h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="rating rateit-small"></div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="reviews">
                                                            (06 Reviews)
                                                        </div>
                                                    </div>
                                                </div>
                                                 /.row  

                                            </td>
                                            // <td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>  
                                            <td class="cart-product-quantity">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="text" value="1">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>


                                        </tr>
                                        <tr>
                                            <td> <div class="pull-right" >
                                                    <button type="submit" class="btn-upper btn btn-primary">BUDGET RECOMMENDATION</button>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                      /tbody 
                                </table>
                               /table 
                            </div>
                        </div>
                        /.shopping-cart-table  
                        <div class="col-md-4 col-sm-12 estimate-ship-tax">

                           
                            </td>
                            </tr>-->









                <tr>
                    <td class="remove-item"><input type="checkbox" name="remove_code[]" value="<?php echo $value['id'];?>" /></td>
                    <td class="cart-image">
                        <a class="entry-thumbnail" href="detail.html">
                            <img src="admin/product_images/<?php echo $value['image'];?>" alt="" width="114" height="108">
                        </a>
                    </td>
                    <td class="cart-product-name-info"  >
                        <h4 class='cart-product-description'>
                            <a href="product-details.php?id=<?php echo $pd=$value['id'];?>" ><?php echo $value['name']; 
    $_SESSION['sid']=$pd;
                         ?></a>
                            </div>
                        </div><!-- /.row -->
                        
                    </td>
                    <td class="cart-product-quantity">
                        <div class="quant-input"  >
                                <div class="arrows">
                                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                </div>
                             <input type="text" value="<?php echo $_SESSION['cart'][$value['id']]['quantity']; ?>" name="quantity[<?php echo $value['id']; ?>]">
                             
                          </div>
                    </td>
                    <td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo "Rs"." ".$value['price']; ?>.00</span></td>
 

                    <td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo "Rs"." ".($_SESSION['cart'][$value['id']]['quantity']*$value['price'] ); ?>.00</span></td>
                </tr>

                <?php } }
$_SESSION['id']=$pdtid;
                ?>
                


















                            </tbody>
                            </table>
                        </div>
                        <!-- /.estimate-ship-tax -->

                        <div class="col-md-12 col-sm-12">
                            <div class="cart-shopping-total">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <!--  <div class="cart-sub-total">
                                                  Subtotal<span class="inner-left-md">$1000.00</span>
                                                </div> class="cart-grand-total"-->
                                                <div style="float: right">
                                                   <h2><b> Grand Total : <span class="inner-left-md"><?php echo $_SESSION['tp']="$totalprice". ".00"; ?></b></h2>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!-- /thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="cart-checkout-btn pull-right">
                                                 <button  type="submit" name="ordersubmit"  class="btn btn-primary checkout-btn">PROCCED TO CHECKOUT</button>   
                                                     <!--<a   type="submit" name="ordersubmit" id="ordersubmit" class="btn btn-primary checkout-btn">PROCEED TO CHECKOUT</a>   -->
                                                    <!-- <button type="submit" name="ordersubmit" class="btn btn-primary">PROCCED TO CHECKOUT....</button>-->

                                                     <!-- <button type="submit"  name="ordersubmit" class="btn btn-primary">PROCCED TO CHECKOUT....</button> -->
                                                 </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- /tbody -->
                                </table>
<?php } else {
echo "Your shopping Cart is empty";
        }?>
                                <!-- /table -->
                            </div>
                        </div>
                        <!-- /.cart-shopping-total -->
                    </div>
                    <!-- /.shopping-cart -->
                </div>
                <!-- /.row -->

            </div>

            <?php include('layouts/footer.php'); ?>