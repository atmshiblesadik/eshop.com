<?php
session_start();
$db=mysqli_connect("localhost","root","","eshop"); //connecting to database
if ($db->connect_error)
{
  echo "Error";
}
 ?>