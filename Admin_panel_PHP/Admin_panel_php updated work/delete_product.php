<?php
      $conn = mysqli_connect("localhost", "root", "", "userregister");

if (isset($_GET['delete_product'])) {

    $delete_id = $_GET['delete_product'];

    $delete_product = "delete from products where product_id='$delete_id'";

    $run_delete = mysqli_query($conn, $delete_product);

    if ($run_delete) {

        echo "<script>alert('A product has been deleted!')</script>";
        echo "<script>window.open('manage-products.php', '_self')</script>";
      
    }

}


?>