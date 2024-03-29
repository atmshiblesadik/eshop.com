<?php
//connection to database
  session_start();
  include("header.php");
  $table=$_GET["table"];
  $category=$_GET['categoryName'];
  $connect = mysqli_connect('localhost','root','','eshop');

    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //get all item detail
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'   =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
          //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          //echo '<script>window.location = "products.php"</script>';
        }
      }
      else
      {
        //cart is empty excute this block
         $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'   =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                //echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="products.php</script>';
              }
            }
      }
    }





?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>PHP Webslesson Tutorial | Simple PHP Mysql Shopping Cart</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <br />  
                  <?php
                    $qury = "SELECT * FROM $table WHERE category='$category'";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
                <div class="col-md-4" >  
                     <form method="post" action="products.php?table=<?php echo $table ?>&categoryName=<?php echo $category ?>&action=add&id=<?php echo $row["id"];?>">  
                          <div style="border:0px solid #333; background-color:#f1f1f1; border-radius:5px; margin-bottom: 5px; padding:16px;" align="center">  
                               <img  src="<?php echo $row['image'];?>" class="img-responsive" style=" height:100px; width: 100px;" /><br />  
                               <h4 class="text-info"><?php echo $row['pName'];?></h4>  
                               <h4 class="text-danger">BDT <?php echo $row['price'];?></h4>  
                               <input type="number" min="1" style="text-align: center; font-weight: bold;" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row['pName'] ?>" />
                           <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">


                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                  <?php } } ?>
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details <b style="color: red">Cart View</b></h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
                              <th>product image</th> 
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                             <?php 
                           if(!empty($_SESSION["shopping_cart"]))
                           {
                            $total = 0;
                            foreach($_SESSION["shopping_cart"] as $key => $value)
                           {

                             ?>
                          <tr> 
                               <td><img src="<?php echo $value['product_img'];?>" style="width: 100px;"></td>
                             
                               <td><?php echo $value['item_name'];?></td>  
                               <td><?php echo $value['item_quantity']; ?></td>  
                               <td>BDT <?php echo $value['item_price'];?></td>  
                               <td>BDT <?php echo number_format($value["item_quantity"] * $value["item_price"],2);?></td>  
                               <td><a href="products.php?table=<?php echo $table ?>&categoryName=<?php echo $category ?>&action=delete&id=<?php  echo $value['item_id'];?>"><span class="btn btn-danger">Remove</span></a></td>  
                          </tr>  
                          <?php $total = $total + ($value["item_quantity"] * $value['item_price']);
                        }
                        ?>
                           
                          <tr>  
                               <td style="font-weight: bold" colspan="3" align="right">Total</td>  
                               <td style="font-weight: bold" align="right">BDT <?php echo number_format($total);?></td>  
                               <td></td>  
                          </tr> 
                          <?php } ?> 
                           
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>
 <?php include("footer.php"); ?>