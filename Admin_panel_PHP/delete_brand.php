<?php
 $conn = mysqli_connect("localhost", "root", "", "userregister");

if (isset($_GET['delete_brand'])) {

    $delete_id = $_GET['delete_brand'];

    $delete_brand = "delete from brands where brand_id='$delete_id'";

    $run_delete = mysqli_query($conn, $delete_brand);

    if ($run_delete) {

        echo "<script>alert('Brand has been deleted!')</script>";
        echo "<script>window.open('insert_brand.php', '_self')</script>";
    }

}


?>