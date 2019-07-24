<?php
session_start();
//fetch_item.php

//include('database_connection.php');
$connect = mysqli_connect('localhost','root','','eshop');
$table= $_SESSION["table"];
$category= $_SESSION["category"];

$query = "SELECT * FROM $table WHERE category='$category'";
$result = mysqli_query($connect,$query);
        if(mysqli_num_rows($result) >0)
        {
          while($row = mysqli_fetch_array($result))
          {

//$statement = $connect->prepare($query);

//if($statement->execute())
//{
	//$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		<div class="col-md-3" style="margin-top:12px;">  
            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
            	<img style="height:150px; width:150px" src="'.$row["image"].'" class="img-responsive" /><br />
            	<h4 style="text-transform: capitalize;" class="text-info">'.$row["pName"].'</h4>
            	<h4 class="text-danger">BDT '.$row["price"] .'</h4>
            	<input type="number" min="1" style="text-align: center; font-weight: bold;" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["pName"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />
            </div>
        </div>
		';
	}
	echo $output;
}
}

?>