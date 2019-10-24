<?php
	require_once('autoload.php');
	session_start();
?> 


<?php
    
$conn  = mysqli_connect("localhost", "root", "", "userregister");
$query = "SELECT * FROM category ";
$result = mysqli_query($conn , $query);
//$output = array();
while($row = mysqli_fetch_array($result))
{
 $sub_data["category_id"] = $row["category_id"];
 $sub_data["category_name"] = $row["category_name"];
 //$sub_data["text"] = $row["category_name"];
 $sub_data["text"] = $row["category_name"];


 $sub_data["parent_category_id"] = $row["parent_category_id"];
 $data[] = $sub_data;
}
foreach($data as $key => &$value)
{
 $output[$value["category_id"]] = &$value;
}
foreach($data as $key => &$value)
{
 if($value["parent_category_id"] && isset($output[$value["parent_category_id"]]))
 {
  $output[$value["parent_category_id"]]["nodes"][] = &$value;
 }
}
foreach($data as $key => &$value)
{
 if($value["parent_category_id"] && isset($output[$value["parent_category_id"]]))
 {
  unset($data[$key]);
 }
}
echo json_encode($data);
//echo '<pre>';
//print_r($data);
//echo '</pre>'; 

?>
 