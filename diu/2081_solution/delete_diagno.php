<?php
   include "connect.php";
$ino=$_REQUEST['id1'];
     $result=mysql_query("DELETE from `diagnosis` where id LIKE '%$ino%'");

     if($result)
     {
     	 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Deleted Successfully!')
    window.location.href='dl.php';
    </SCRIPT>");

     }
     else
     {
     	echo mysql_error();
     }
     ?>