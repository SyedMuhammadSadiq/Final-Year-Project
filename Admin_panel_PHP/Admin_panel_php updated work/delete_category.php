<?php
$conn = mysqli_connect("localhost", "root", "", "userregister");

if (isset($_GET['delete_category'])) {

    $delete_id = $_GET['delete_category'];

    $delete_category = "delete from category where category_id='$delete_id'";

    $run_delete = mysqli_query($conn, $delete_category);

    if ($run_delete) {

        echo "<script>alert('Category has been deleted')</script>";
        echo "<script>window.open('index.php', '_self')</script>";
        
    }

}


?>