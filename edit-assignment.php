<?php
	$con = mysqli_connect('localhost','root','');
	if(!$con)
	{
		echo "Server not found...";
	}
	if(!mysqli_select_db($con,'yagna'))
	{
		echo "Database not found...";
	}
	$id=$_GET['id'];
	$sql="SELECT * FROM assignment WHERE id='$id'";
	$query=mysqli_query($con,$sql);
	$q=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assignmnet.css">

</head>
<body>

	<form method="POST" >
            <table border="1">
		<tr>
			<td><font color="white"> <b>TASK </b> </font></td>
            <td><font color="white"> <b>TIME/DATE </b></font> </td>
            <td><font color="white"> <b>Messsage</b></font></td>			
        </tr>

        
        <tr>
            <td> <input type="text" name="task" value='<?php echo $q['task'];?>'></td><br>
            <td> <input type="date" name="dates" value='<?php echo $q['dates'];?>'></td><br>
            <td><textarea name="message" rows="5" cols="30"><?php echo $q['message'];?></textarea></td><br>
        </tr>

        <tr>
           
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>

      </table>


	<?php
	if(isset($_POST['submit']))
		{
			$task=$_POST['task'];
			$dates=$_POST['dates'];
			$message=$_POST['message'];
			$sql="UPDATE `assignment` SET `task`='$task',`dates`='$dates',`message`='$message' WHERE id='$id'";
			$query=mysqli_query($con,$sql);
			if($query)
			{
				 echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='select-assignmnet.php?flag=1';</script>");
			}
		}
	?>
</body>
</html>