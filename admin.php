<?php 
include ("database.php");
if (isset($_POST['submit'])) {
  // escape variables for security
  $table=mysqli_real_escape_string($db, $_POST['table']);
  $category=mysqli_real_escape_string($db, $_POST['category']);
  $name=mysqli_real_escape_string($db, $_POST['name']);
  $price=mysqli_real_escape_string($db, $_POST['price']);
  $details=mysqli_real_escape_string($db, $_POST['details']);
  $target_dir = "img/";
  $temp = explode(".", $_FILES["fileToUpload"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
  $target_file = $target_dir . $table. $category. $newfilename;
echo $target_file;
  $image=mysqli_real_escape_string($db,$target_file);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $sql="INSERT INTO $table(pName,category,price,details,image) VALUES ('$name','$category','$price','$details','$image')";//inserting data
  if($db->query($sql)===TRUE) echo "ok";
    else echo "error";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
  //$query="SELECT email FROM users where email='$rMail' ";//fetching data from 
  //$result= mysqli_query($db, $query);

  //if (mysqli_num_rows($result)==1) {
  
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Admin</title>
 </head>
 <body>
<form method="post" action="admin.php" enctype="multipart/form-data">
	<table border="0px" align="center">
        <tr>
          <td>Table name</td>
          <td><select name="table" class="textInput">
          <option value="mens">mens</option>
          <option value="womens">womens</option>
          <option value="childerns">Childrens</option>
          <option value="accessories">Accessories</option>
          <option value="sports">sports</option>
          <option value="technologies">technologies</option>
        </select>
        </td>
        </tr>

        <tr>
          <td>Category</td>
          <td><input type="text" name="category" value="" class="textInput"> </td>
        </tr>

        <tr>
          <td>Name</td>
          <td><input type="text" name="name" value="" class="textInput"> </td>
        </tr>

        <tr>
          <td>Price</td>
          <td><input type="text" name="price" value="" class="textInput"> </td>
        </tr>

        <tr>
          <td>Details</td>
          <td><input style="height: 100px" type="text" name="details" value="" class="descriptionInput"> </td>
        </tr>

		<tr>
			<td>Photo</td>
			<td>
				<input type="file" id="fileToUpload" name="fileToUpload" required="required" accept=".jpg, .jpeg, .png">
			</td>
        </tr>
          <td></td>
          <td><button type="submit" name="submit" value="submit">Send</button></td>
        </tr>
	</form> </body>
 </html>
