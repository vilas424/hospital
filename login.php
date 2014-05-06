<html>

<head>

<title>Login logic</title>

</head>

<body>

<?php
session_start();

include 'connect_db.php';
 $myusername=$_POST['uname'];
 $mypassword=$_POST['password'];

$sql="select * from register where uname='$myusername' and password='$mypassword'";
$result=mysql_query($sql);



if(mysql_num_rows($result))

{
  header("location:loginsuccess.php");
}


else

{

  
  header("location:error.html");


}

mysql_close();

?>


</body>

</html>

