<html>
<head>
<title> registered </title>

<?php
session_start();
$con=mysql_connect("localhost","root","root");
mysql_select_db("amreen",$con);
$sql="insert into register values ('$_POST[sfname]','$_POST[sage]','$_POST[sgender]','$_POST[saddress]','$_POST[suname]','$_POST[spassword]')";
$res=mysql_query($sql,$con);

?>

</head>
<body background="lost.jpg">
<center><h1> <i> YOU ARE SUCCESSFULLY REGISTERED </i></h1></center>
<p><center>  <a href="index.html"> Click here to Login and Continue </center></p>
</body>
</html> 