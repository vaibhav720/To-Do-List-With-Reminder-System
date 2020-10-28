<?php
session_start();
?>

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
?>

<!DOCTYPE html>
<head>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
<style type="text/css">
	table{
border-collapse: collapse;
width: 100%;
background-color:white;
box-shadow: 0 4px 8px 0 rgba(0  , 0,0,0.2), 0 6px 20px 0 rgba(0 , 0,0,0.19);
margin-bottom:25px
}

th,td{
text-align:center;
padding:8px;}

tr:nth-child(even) {background-color: #f2f2f2}
th{ 
background-color: #222211;
color: white;
}
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
 
  document.getElementById("Div").style.display = "block";
}


</script>

</head>
<body > 
	<body onload="myFunction()" style="margin:0;">
	<div style="display:none;" id="Div" class="animate">
	<table >
		<th> ID </th>
		<th> TASK </th>
		<th> DATE </th>
		<th> MESSAGE </th>
		<th> EDIT</th>
		<th> DELETE </th>
		<th> DONE </th>	
<?php
$email=$_SESSION["email2"];
$sql="SELECT * FROM assignment where status=1 && email='$email'";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{
?>
	<tr>
		<td><?php echo $fetch['id'];?></td>
		<td><?php echo $fetch['task'];?></td>
		<td><?php echo $fetch['dates'];?></td>
		<td><?php echo $fetch['message'];?></td>
		<td><a href="edit-assignment.php?id=<?php echo $fetch['id'];?>">  <i class="material-icons">&#xe3c9;</i> </a></td>
		<td><a href="delete-assignment.php?id=<?php echo $fetch['id'];?>"> <i class="material-icons">&#xe872;</i></a></td>
		<td><a href="done-assignment.php?id=<?php echo $fetch['id'];?>"><i class="material-icons">&#xe876;</i></a></td> 
	</tr>
	
	<?php
		
}	
	
	
?>

</table>
</body>
</html>