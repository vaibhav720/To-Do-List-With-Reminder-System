


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



<?php
$sql="SELECT * FROM `assignment` WHERE CURDATE()=(DATE_SUB(dates,INTERVAL 2 DAY)) && status=1 && emailstatus=1";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{


		 $a=$fetch['id'];
		 $b=$fetch['task'];
		 $c=$fetch['dates'];
		 $d=$fetch['message'];
		 $e=$fetch['email'];


 $to_email = "$e";   

$subject = " REGARDING $b";

$body = "A REMINDER TO YOU. A TASK NAMED $b IS TO BE COMPLETED BEFORE $c.";
$headers = "From: VAROYA";
 
if (mail($to_email, $subject, $body, $headers)) 
{



	 $qry="SELECT * FROM assignment WHERE id='$a'";
	$rs=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($rs);
	$emailstatus=$row['emailstatus'];
	if($emailstatus==1)
	{
		$qry1="UPDATE assignment SET emailstatus=0 where id='$a'";
		$rs1=mysqli_query($con,$qry1);
	}
}	 // header("location:select-assignmnet.php");
	
    // echo "Email successfully sent to $to_email...";
 
// 	else {
//     echo "Email sending failed...";
// }
}
?>	
	
