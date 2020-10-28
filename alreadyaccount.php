<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  
  <link rel = "stylesheet" type="text/css" href="login-css.css">
</head>
<body>
  <form method="post">  
    <label>
    <p class="label-txt"></p>
    <input type="text" name="username"class="input" placeholder="Enter Your username">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <label>
    <p class="label-txt"></p>
    <input type="password" name="password" class="input" placeholder="Enter Your password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <button type="submit" name="submit">Login</button>
  </form>


<?php
  $con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo "server not found";
}

if(!mysqli_select_db($con,'yagna'))
{
  echo"database not found";
}
if(isset($_POST['submit']))

{      
    $username= $_POST['username'];  
    $password= $_POST['password'];  
      
         
      
        $sql = "SELECT * FROM registration WHERE username='$username' && password='$password'";  
         $result = mysqli_query($con, $sql);   
         $count = mysqli_num_rows($result);  
         $fetch=mysqli_fetch_array($result);
         $email=$fetch['email']; 
         $_SESSION["email2"] = $email;
           
         if($count == 1)
         { 
         
           
         echo ("<script LANGUAGE='JavaScript'>window.alert('Login Succesfully');window.location.href='table2.php?flag=1';</script>");
      
        }
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
}     
?>  


</body>
</html>