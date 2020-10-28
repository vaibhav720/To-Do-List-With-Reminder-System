<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <title>Assignment</title>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h1 {
  text-shadow: 2px 2px red;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.monospace {
  font-family: "Lucida Calligraphy";
  }
/*table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}*/
</style>
</head>
<body >
   
      <center><b><font color="white" size="40px"> VAROYA</font> <font class="monospace" color="white" size="5px">  The E-Reminder </font></font></b></center>

  <ul>
     <li><a href="assignmnet.php" target="id"><b>INSERT TASKS</b></a></li>
    <li><a  href="select-assignmnet.php" target="id"><b>DISPLAY</b></a></li>
    <li><a href="uncompleted.php" target="id"><b>REMAINING TASKS</b></a></li>
    <li><a href="completed.php" target="id"><b>COMPLETED TASKS</b></a>
    <li><a href="delete-assignment2.php" target="id"><b>DELETED TASKS</b></a></li>

  <li style="float:right"><a href="alreadyaccount.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log-out</a></li>
</ul>
</body>
</html>