 

<?php

 

include('include/database_connection.php');

$data = array(
 //':name'  => $_POST['name'],
 //':parent_id' => $_POST['parent_id']

 ':name'  => $_POST['name'],
 ':parent_id' => $_POST['parent_category']
);

$query = "
 INSERT INTO category (name, parent_id) VALUES (:name, :parent_id)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo 'Category Added';
//header('location:insert_category.php');

}


?>