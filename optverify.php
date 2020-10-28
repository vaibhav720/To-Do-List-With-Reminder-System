<?php
session_start();
?>

   
<!DOCTYPE html>
<html>
<head>

  <link rel = "stylesheet" type="text/css" href="login-css.css">
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



  <form  onsubmit="return false">  
    <label>
    <p class="label-txt"></p>
    <input type="number" name="otp" id="otp" class="input" placeholder="Enter Your OTP">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  <button type="submit" name="submit" onclick="checkotp();">Login</button>
  </form>

 
<script type="text/javascript">
function checkotp()
    {
      var a=document.getElementById('otp').value;
      var b="<?php echo $_SESSION["otp"]?>";
      if(a==b)
      {
            window.alert('Login Succesfully');
            window.location.replace("table2.php");
                 }

      else
      {
        window.alert(" Login failed. OTP Mismatch.");
      }

      
    }
</script> 
</body>
</html>