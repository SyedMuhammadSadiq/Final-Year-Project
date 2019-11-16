<?php

//fill_parent_category.php

include('include/database_connection.php');
$query = "SELECT * FROM category ORDER BY name ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '<option value="0">Parent Category</option>';

foreach($result as $row)
{
 $output .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';
}

echo $output;

?>

