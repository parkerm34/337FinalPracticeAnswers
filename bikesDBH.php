<?php
	$DBH = new PDO("mysql:host=localhost;dbname=final", 'root', '');
	$stmt = $DBH->prepare("SELECT * FROM product");
	$stmt->execute(); 
	$products = $stmt -> fetchAll(PDO::FETCH_ASSOC);

	$count = 0;

	$return = json_encode($products);

	echo $return;

?>