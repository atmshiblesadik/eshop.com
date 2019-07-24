


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="login-page.css">
	<link rel="stylesheet" href="main.css">
	<link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Catamaran' rel='stylesheet'>


	

</head>
<body translate="no">


<header>
		<a href="main.php" class="header-brand">Eshop</a>
		<nav>
			<ul>
				<li><a href="main.php">Home</a></li>
				<li><a href="main.php">About Us</a></li>
				<li><a href="main.php">Contacts</a></li>
			</ul>
			<a href="login.php" class="header-logo">Login</a>
		</nav>
	</header>

  <div class="login-page">
  <div class="form">
   
    <form class="login-form" name="LoginForm"  >
      <input type="text" placeholder="Email"  name="Email" required="Must Be Filled">
      <input type="password" placeholder="password" name="pass" required="Must Be Filled">
      <input type="submit" name="submit">
      <?php  
			$db=mysqli_connect("localhost","root","","login");

			if (isset($_REQUEST["submit"])) {
				$username=$_REQUEST["Email"];
				$password=$_REQUEST["pass"];
				$query="select * from registration where Email='$username' && password='$password' ";
				$result=mysqli_query($db,$query);
				$rowcount=mysqli_num_rows($result);
				if ($rowcount == true) {
					# code...
					header("location:index.php");
				}
				else{
					echo "Please Enter a Valid Email and password!";
				}
			}
		?>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
      
    </form>
  </div>
</div>
    


 
</body>
</html>

