<!DOCTYPE html>
<html>
<html lang="en">
<head>
	
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
body{
  /*background-image: url("2.jpg");*/
  background-color:  #004d4d;
}

</style>
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


  <?php include 'header.php';?>



<iframe height="386px" width="100%" src="welcome.php" name="id"  > </iframe>


<?php include 'footer.php';?>
</body>
</html>