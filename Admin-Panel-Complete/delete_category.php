<?php
include('include/db.php');

if (isset($_GET['delete_category'])) {

    $delete_id = $_GET['delete_category'];

    $delete_category = "delete from category where category_id='$delete_id'";

    $run_delete = mysqli_query($conn, $delete_category);

    if ($run_delete) {

        echo "<script>alert('Category has been deleted')</script>";
        echo "<script>window.open('insert_category.php', '_self')</script>";
        
    }

}


?>