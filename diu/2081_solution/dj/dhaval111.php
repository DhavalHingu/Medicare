<?php 

include('connect.php');

$dhaval = $_POST['get_option'];
     $sql="SELECT `code` FROM `centers` WHERE center='$dhaval'";
     $find=mysql_query($sql);
     $row=mysql_fetch_array($find);
     
       echo $row['code'];


?>