<?php 
include ("database.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eshop.com</title>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="mens-ware1.css">
    <link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
    <title></title>
  </head>
  <body>
    <header>
      <?php include ("header.php"); ?>
    <div class="links-wrapper">
    <section class="index-links">
      <a href=" products.php?table=mens&categoryName=tshirt">
			<div class="index-boxlink-1">
				<h3>Tshirt</h3>
			</div>
			</a>

      <a href=" products.php?table=mens&categoryName=shirt">
			<div class="index-boxlink-2">
				<h3>Shirt</h3>
			</div>
			</a>

      <a href=" products.php?table=mens&categoryName=pants">
			<div class="index-boxlink-3">
				<h3>Pants</h3>
			</div>
			</a>

      <a href=" products.php?table=mens&categoryName=jackets">
			<div class="index-boxlink-4">
				<h3>Jackets</h3>
			</div>
			</a>

      <a href=" products.php?table=mens&categoryName=traditional">
			<div class="index-boxlink-5">
				<h3>Traditional</h3>
			</div>
			</a>

      <a href=" products.php?table=mens&categoryName=blazers">
			<div class="index-boxlink-6">
				<h3>Blazers</h3>
			</div>
			</a>
		</section>
  </div>

  <footer>
    <ul class="footer-links-main">
      <li><a href="mens-ware.php">Men's Ware</a></li>
      <li><a href="womens-ware.php">Woman's Ware</a></li>
      <li><a href="children-ware.php">Children's Ware</a></li>
      <li><a href="sports.php">Sports</a></li>
      <li><a href="technologies.php">Technologies</a></li>
    </ul>
    <ul class="footer-links-cases">
      <li><a href="#">home</a></li>
      <li><a href="#">cases</a></li>
      <li><a href="#">portfolio</a></li>
      <li><a href="#">contact</a></li>
      <li><a href="#">about me</a></li>
    </ul>
    <div class="footer-sm">
      <a href="#">
        <img src="img/facebook.png" alt="facebook icon">
      </a>
      <a href="#">
        <img src="img/twitter.png" alt="twitter icon">
      </a>
      <a href="#">
        <img src="img/linkedin.png" alt="linkedin icon">
      </a>
    </div>

    <div>
      
    </div>
  </footer>
  </body>
</html>

