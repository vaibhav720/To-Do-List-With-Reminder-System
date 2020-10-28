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
</style>
</head>
<body>
	<table border="1" width="100%">
		<th><font color="white"> <b> ID </b></font></th>
		<th><font color="white"> <b> TASK </b></font></th>
		<th><font color="white"> <b> DATE </b></font></th>
		<th><font color="white"> <b> MESSAGE </b></font></th>
	
<?php
$email=$_SESSION["email2"];
$sql="SELECT * FROM assignment where dates>CURDATE() && status=1 && email='$email'";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{
?>
	<tr>
		<td><?php echo $fetch['id'];?></td>
		<td><?php echo $fetch['task'];?></td>
		<td><?php echo $fetch['dates'];?></td>
		<td><?php echo $fetch['message'];?></td>
	</tr>
	<?php	
}	

?>

</table>
</body>
</html>