<?php

mysql_connect("localhost","root","root");
$db=mysql_select_db("amreen");

$staff_id=  $_POST['staff_id'] ;
$sql= "select * from staff where staff_id='$staff_id'";
$res=mysql_query($sql);
if(mysql_num_rows($res)>0)
{
    print("<table>");
     print("<tr>");
       print("<th>Staff ID");
       print("<th>Staff Name");
       print("<th>Specialization");
       print("<th>Duty Timing");
       print("</tr>");
       $res=mysql_query($sql);
       while($row=mysql_fetch_array($res))
       {
           print("<tr>");
           print("<td>$row[0]</td>");
           print("<td>$row[1]</td>");
           print("<td>$row[2]</td>");
           print("<td>$row[3]</td>");
       }
       print("</table>");
} 
?>
