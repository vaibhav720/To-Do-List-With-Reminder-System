<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assignmnet.css">
</head>


<body>
	
		<form method="post" >
            <table border="1" >
		<tr>
			<td><font color="white"> <b>TASK </b> </font></td>
            <td><font color="white"> <b>TIME/DATE </b></font> </td>
            <td><font color="white"> <b>Messsage</b></font></td>
			
        </tr>

        
        <tr>
            <td> <input type="text" name="task"></td><br>
            <td> <input type="date" name="date"></td><br>
            <td><textarea name="message" rows="5" cols="30"></textarea></td><br>
        </tr>

        <tr>
           
            <td colspan="3"><input type="submit" name="submit"></td>
        </tr>

      </table>



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
	$task=$_POST['task'];
	$dates=$_POST['date'];
	$message=$_POST['message'];
    $email=$_SESSION["email2"];
	$sql="INSERT INTO assignment(id,task,dates,message,status,email,emailstatus) VALUES('','$task','$dates','$message','1','$email','1')";
	$query=mysqli_query($con,$sql);
}

?>



</body>
</html>
