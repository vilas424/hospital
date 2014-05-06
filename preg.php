<html>
<head>
<title> registered </title>

<?php
session_start();
$c;
$con=mysql_connect("localhost","root","root");
mysql_select_db("amreen",$con);
$sql1="select max(pid) as mmm from pregister";
$res1=mysql_query($sql1,$con);
$row=mysql_fetch_array($res1);
$c=$row['mmm'];
$c++;
$sql="insert into pregister values ('$_POST[pname]','$_POST[gender]','$_POST[category]','$_POST[category]','$_POST[surgery]','$c')";
$res=mysql_query($sql,$con);

?>

</head>
<body>

<center><h1> <i> YOU ARE SUCCESSFULLY REGISTERED </i></h1></center>
<?php
echo "<center><h3>Patient ID is: $c </h3></center>";

?>
</body>
</html> 