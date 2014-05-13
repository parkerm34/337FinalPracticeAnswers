<?php 
	$title = "Final of 337";
?>


<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="author" content="Parker Mathewson" />
		<meta name="description" content="Our final exam" />
		<link href="final.css" rel="stylesheet" type="text/css">
		<script src="jquery-2.1.0-min.js"></script>
		<script src="final.js"></script>
		
		<!-- Date: 2014-05-12 -->
	</head>
	

	<section class="wrapper">
		<div id="lightbox"> </div>
		<nav id="nav">
			<ul>
				<li id="close" onclick="shut();"> </li>
				<li id="prev" onclick="prev();"> </li>
				<li id="next" onclick="next();"> </li>
			</ul>
		</nav>
		<h1>Juliana Bicycles</h1>

<?php
	/* FINAL PRACTICE */
	/* Take all the products from a database and recreate the midterm, just with a database */
	/* Create the database, making a product table with at LEAST the following columns      */
	/* image, name, id (a_i is auto increment, click this), description						*/
	/* Once the database is created, insert the elements dynamically into the web page.		*/
	/* The product of this should look like the homepage as shown on the midterm.pdf		*/
	/* Everything that uses the pictures must be dynamic.									*/

?>

<?php
	$DBH = new PDO("mysql:host=localhost;dbname=final", 'root', '');
	$stmt = $DBH->prepare("SELECT * FROM product");
	$stmt->execute(); 
	$products = $stmt -> fetchAll(PDO::FETCH_ASSOC);

		foreach($products as $product) {
			// Check for blank title, if it is blank, it is rider
			if(!empty($product['title']))
			{
				// Just using the straight echo would extract my forward slashes '/' so I put the html into a string
				// which printed it out just as it was called.
				$str = '<div class="modal" id="' . $product['title'] . '" style="background-image: url(' . $product["imagesmall"] . ');">';
				echo $str;
				echo '<span>' . $product['title'] . ' </span>';
				echo '</div>';
			}
			else
			{
				$str = '<div class="modal" id="rider" style="background-image: url(images/rider-small.jpg);">';
				echo $str;
				echo '<span> </span>';
				echo '</div>';
			}
		}
?>
	<script>
		// Initializes the array of bikes for the scrolling pictures
		initBike();
	</script>
	</section>

</html>