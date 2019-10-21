<?php 
// get products

 
 fuction get_products(){

 	$query = query("SELECT * FROM products");
 	confirm($query);

 	while ($row = fetch_array($query)) {
		
		echo $row ['product_price'];
 	}
}


?>