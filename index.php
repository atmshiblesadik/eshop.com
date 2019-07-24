<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eshop.com</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="slider.css">
	<link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include("header.php"); ?>

	<main>

		<div class="wrapper">
		<div class="container">
			<div style="margin: 0px; padding: 0px 15px 0px 0px" class="col-sm-10">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    
    <div class="carousel-inner">
      <div class="item active">
        <img src="summer.jpg" alt="Summer" style="height:400px;width:100%;">
      </div>

      <div class="item">
        <img src="avengers.jpg" alt="Avengers" style="height:400px;width:100%;">
      </div>
    
      <div class="item">
        <img src="fold.jpg" alt="Galaxxy fold" style="height:400px;width:100%;">
      </div>
    </div>

    
  </div>
</div>
</div>
<!--
		<slider>
				<slide></slide>
				<slide></slide>
				<slide></slide>
				<slide></slide>
		</slider>
-->
		<section style="padding: 0px 3px" class="index-links">
			<a href="mens-ware.php">
			<div class="index-boxlink-1">
				<h3>Men's Ware</h3>
			</div>
			</a>

			<a href="womens-ware.php">
			<div class="index-boxlink-1">
				<h3>Woman's Ware</h3>
			</div>
			</a>

			<a href="children-ware.php">
			<div class="index-boxlink-1">
				<h3>Children's Ware</h3>
			</div>
			</a>

			<a href="accessories.php">
			<div class="index-boxlink-1">
				<h3>Accessories</h3>
			</div>
			</a>

			<a href="sports.php">
			<div class="index-boxlink-1">
				<h3>Sports</h3>
			</div>
			</a>

			<a href="technologies.php">
			<div class="index-boxlink-1">
				<h3>Technologies</h3>
			</div>
			</a>
		</section>
	</div>
	</main>

 <?php include("footer.php"); ?>
 	</div>
</body>
</html>
