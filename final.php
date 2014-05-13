<?php 
	$title = "Final of 337";
	$DBH = new PDO("mysql:host=localhost;dbname=final", 'root', '');
?>


<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="author" content="Parker Mathewson" />
		<meta name="description" content="Our final exam" />
		<link href="final.css" rel="stylesheet" type="text/css">
		<script src="jquery-2.1.0.min.js"></script>
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
/* 
		<span> </span>
		<span>Furtado</span>
		<span>Joplin</span>
		<span>Juno</span>
		<span>Nevis</span>
		<span>Origin</span>
*/ 
?>
	</section>

</html>