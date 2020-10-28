<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type="text/css" href="login-css.css">
	
	
	<h1 style="text-align: center;">REGISTRATION FORM </h1>
    <style type="text/css">
    #loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  border-bottom: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate{
  position: relative;
  -webkit-animation-name: animate;
  -webkit-animation-duration: 0.5s;
  animation-name: animate;
  animation-duration: 0.5s
}

@-webkit-keyframes animate {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animate{ 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#Div {
  display: none;
  text-align: center;
}
</style>


<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("Div").style.display = "block";
}
</script>

</head>


<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="Div" class="animate">

<script>

			 function validate() {
      
         if( document.Form.name.value == "" ) {
            alert( "Please provide your name!" );
            document.Form.name.focus() ;
            return false;
         }
         
         if( document.Form.username.value == "")
         {
         	alert( "Please provide your Username !" );
            document.Form.username.focus() ;
            return false;
         }
         if( document.Form.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.Form.email.focus() ;
            return false;
         }
         if( document.Form.password.value == "")
         {
         	alert( "Please provide your Password !" );
            document.Form.password.focus() ;
            return false;
         }         
         if( document.Form.password2.value == "")
         {
         	alert( "Please provide your Confirm Password !" );
            document.Form.password2.focus() ;
            return false;
         }
         if( document.Form.password2.value != document.Form.password.value )
         {
         	alert( " Confirm Password Does not match!" );
            document.Form.password2.focus() ;
            return false;
         }
         return( true );
      }

	</script>
	<form name ="Form" onSubmit="return validate()" method="post">	
		<label>
    		<p class="label-txt"></p>	
			<input type="text" name="name" class="input" placeholder="Enter Your Name" >
    		<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
    		   <div class="input-group">
   				<div class="input-group-addon">
				<!-- <i class="fa fa-envelope-o"></i> --> 
   			</div>

    	</label>

		<label>
			<input type="text" name="username" class="input" placeholder="Enter your username" onkeypress="return (event.charCode > 64 && 
	    	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
	    	<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
    	</label>

    	<label>
			<input type="email" name="email" class ="input"placeholder="Enter Your email" >
			<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
		</label>

		<label>		
			<input type="password" name="password"  class ="input" placeholder="Create  password"  id="password1" >
			<div class="line-box">
      		<div class="line">
      		</div>
    		</div>
		</label>
		<label>
			<input type="password" name="password2" class="input" placeholder="Confirm password"  id="password2">
			<div class="line-box">
	      		<div class="line">
	      		</div>
	    		</div>
	    </label>
		<div class="form-group">
        <button type="submit" name="submit" class="button" > submit to verify otp  </button>
    </div>
    <p class="text-center">Have an account? <a href="alreadyaccount.php">Log In</a> </p>

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
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$_SESSION["email2"] = $email;
	$sql="INSERT INTO registration(id,name,username,email,password,status) VALUES('','$name','$username','$email','$password','1')";
	$query=mysqli_query($con,$sql);

	if($query)
	{  
    $otp= rand(1000,9999);
        $_SESSION["otp"]=$otp;
        $to_email = $_SESSION["email2"];   
        $subject = "Verification of Email address";
        $body = "YOU HAVE APPLIED FOR THE REGISTRATION OF VAROYA WEBSITE.YOUR OTP IS  $otp";
        $headers = "From: VAROYA";
         
        if (mail($to_email, $subject, $body, $headers)) 
        {
            // echo "<h3><center>Check your Email to verify OTP and $otp</center></h3> ";
          echo ("<script LANGUAGE='JavaScript'>window.alert('CHECK YOUR EMAIL TO VERIFY OTP ');window.location.href='optverify.php';</script>");          
        }
        else
         {
            echo "<h3><center>Email sending failed...Your Email is incorrect...$otp</center></h3>";
            
      }

		// echo ("<script LANGUAGE='JavaScript'>window.location.href='optverify.php?flag=1';</script>");
	}
}

?>
	

</body>
</html>