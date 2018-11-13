<?php 

include('connect.php');

$fees_type = $_POST['get_option'];
     $sql="SELECT `batch_no` FROM `stock` WHERE name='$fees_type'";
     $find=mysql_query($sql);
     $row=mysql_fetch_array($find);
     
       echo $row['batch_no'];


?>