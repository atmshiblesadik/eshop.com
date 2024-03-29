<?php
include("header.php");
session_start();
$table=$_GET["table"];
$category=$_GET["categoryName"];
$_SESSION["table"]=$table;
$_SESSION["category"]=$category;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="slider.css">
    <link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>
    <style>
    .popover
    {
        width: 100%;
        max-width: 800px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <br />
      
      <br />
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Menu</span>
            <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <a class="navbar-brand" href="index.php">Eshop</a>
          </div>
          
          <div id="navbar-cart" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
                <a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="badge"></span>
                  <span class="total_price">$ 0.00</span>
                </a>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
      <div id="popover_content_wrapper" style="display: none">
        <span id="cart_details"></span>
        <div align="right">
          <a href="checkout.php" class="btn btn-primary" id="check_out_cart">
          <span class="glyphicon glyphicon-shopping-cart"></span> Check out
          </a>
          <a href="#" class="btn btn-default" id="clear_cart">
          <span class="glyphicon glyphicon-trash"></span> Clear
          </a>
        </div>
      </div>

      <div id="display_item">


      </div>
      
    </div>
    <?php include("footer.php"); ?>
  </body>
</html>

<script>  
$(document).ready(function(){

  load_product();

  load_cart_data();
    
  function load_product()
  {
    $.ajax({
      url:"fetch_item.php",
      method:"POST",
      success:function(data)
      {
        $('#display_item').html(data);
      }
    });
  }

  function load_cart_data()
  {
    $.ajax({
      url:"fetch_cart.php",
      method:"POST",
      dataType:"json",
      success:function(data)
      {
        $('#cart_details').html(data.cart_details);
        $('.total_price').text(data.total_price);
        $('.badge').text(data.total_item);
      }
    });
  }

  $('#cart-popover').popover({
    html : true,
        container: 'body',
        content:function(){
          return $('#popover_content_wrapper').html();
        }
  });

  $(document).on('click', '.add_to_cart', function(){
    var product_id = $(this).attr("id");
    var product_name = $('#name'+product_id+'').val();
    var product_price = $('#price'+product_id+'').val();
    var product_quantity = $('#quantity'+product_id).val();
    var action = "add";
    if(product_quantity > 0)
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
        success:function(data)
        {
          load_cart_data();
          //alert("Item has been Added into Cart");
        }
      });
    }
    else
    {
      //alert("Please Enter Number of Quantity");
    }
  });

  $(document).on('click', '.delete', function(){
    var product_id = $(this).attr("id");
    var action = 'remove';
    if(1)
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, action:action},
        success:function()
        {
          load_cart_data();
          $('#cart-popover').popover('hide');
          //alert("Item has been removed from Cart");
        }
      })
    }
    else
    {
      return false;
    }
  });

  $(document).on('click', '#clear_cart', function(){
    var action = 'empty';
    $.ajax({
      url:"action.php",
      method:"POST",
      data:{action:action},
      success:function()
      {
        load_cart_data();
        $('#cart-popover').popover('hide');
        //alert("Your Cart has been clear");
      }
    });
  });
    
});

</script>