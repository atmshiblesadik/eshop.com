<!DOCTYPE html>
<html>
<head>
	<title>fd</title>
	<link rel="stylesheet"  href="register.css">
</head>
<body>

<div style="height: 80%;width: 97%;box-shadow: 0 2px 4px;position: absolute;margin: 5% absolute;background: #FFFFFF" >
	 <form method="POST" align="center" >
        <h1> Sign Up</h1>

          <p  align="center" ><input type="text" name="fname" placeholder="Username" required="Can't empty" /></p>
          <?php
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   // collect value of input field
                  $name =$_POST['fname'];
                  //$n=strval($name);
                  $w=str_word_count($name);
                  //$Cname=strlen($name);
                  if (empty($name)) {
                  echo "Text Feild Can't empty"."<br>";
                  }elseif (!preg_match("/^[a-zA-Z._-]/", $name)) {
                  echo "Name must start with a letter"."<br>";
                  echo "example:  Mizanur rahman"."<br>";
                  }elseif ($w>=2) {
                  //echo "Words:".$w."<br>";
                  echo "Text  added Sucessfully!"."<br>";
                  }elseif ($w<2) {
                  // echo "Words".$w."<br>";
                 echo "you have to use atlaset two Words"."<br>";
                  }else{
                  echo "Text can't Added"."<br>";
                  }
                  }
                  ?>
          <p  align="center" ><input type="text" name="Phone_Number" placeholder="Phone Number" required="" /></p>
          <?php
                
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                    $Phone=$_POST['Phone_Number'];
                    $w=strlen($Phone);

                  if (!preg_match("/^[0-9]/", $Phone)) {/*Here check the Phone validation*/
                        echo "Text Must be a Digit "."<br>";
                    }elseif ($w>11) {
                  // echo "Words".$w."<br>";
                  echo "you have to use atlaset 11 Digit"."<br>";
                  }else{
                        echo "Please Enter  a valid Phone Number"."<br>";
                        echo "ex:12345678910"."<br>";
                    }
                  
                }
          ?>

         <p  align="center" > <input type="text" name="Email" placeholder="Email" required="" /></p>
          <?php
                
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                    $Email=$_POST['Email'];

                    if(empty($Email)){
                        echo "Email can't be empty"."<br>";
                    }elseif (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $Email)) {/*Here check the email validation*/
                        echo "$Email is a valid email address"."<br>";
                    }else{
                        echo "Please Enter  a valid email address"."<br>";
                        echo "ex:example@gmail.com"."<br>";
                    }
                  
                }
          ?>
         <p  align="center" ><p  align="center" > <input type="password" name="Password" placeholder="Password" required="" /></p>
        
         <p  align="center" > <input type="password" name="Confirm_Password" placeholder="Retype password" required="" /></p>

          <?php

        if(isset($_POST['signup-button']))
        {
          $con=mysqli_connect("localhost","root","","login");
          if(!$con)
          {
            die("Connection Error: ".mysqli_connect_error()."<br/>");
          }
          
            if($_POST['Password'] == $_POST['Confirm_Password'])
            {

              /// assigning The value into new Variable       
              $fname=$_POST['fname'];
              
              $Phone_Number=$_POST['Phone_Number'];
              $Email=$_POST['Email'];
              $Password=$_POST['Password'];
              $Confirm_Password=$_POST['Confirm_Password'];
              

              $sql="INSERT INTO registration(fname,Phone_Number,Email,Password,Confirm_Password) VALUES('$fname','$Phone_Number','$Email','$Password','$Confirm_Password')";// Inserting The value into database
              if(mysqli_query($con,$sql))
              {
                header("Location:login.php");
              }
              else
              {
                echo "Error in inserting: ".mysqli_error($con);
              }
                }
            else
            {
              
              echo "Your Entered password did not match"."<br>";
            }

          
          
        mysqli_close($con);   
        }

        ?>
        
          <input type="submit" name="signup-button" value="Sign Up"/>
        
        </form>
	
</div>
</body>
</html>