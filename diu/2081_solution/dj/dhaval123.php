<?php 

include('connect.php');

$fees_type = $_POST['get_option'];
     $sql="SELECT `sup_id` FROM `suppliers` WHERE name='$fees_type'";
     $find=mysql_query($sql);
     $row=mysql_fetch_array($find);
     
       echo $row['sup_id'];


?>