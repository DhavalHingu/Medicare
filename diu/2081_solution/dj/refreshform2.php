<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("pharma", $connection);

//Fetching Values from URL 
$cc=$_POST['a']; 
$name2=$_POST['b'];
$email2=$_POST['c'];
$contact2=$_POST['d'];
$dd=$_POST['e'];
$ee=$_POST['f'];
//Insert query                                                                                               
  $query = mysql_query("INSERT INTO `transfer`(`center`,`code`,`date`,`medicine`,`batch_no`,`quantity`) VALUES ('$cc','$name2','$email2','$contact2','$dd','$ee')");
  if($query){
  echo "Data Submitted succesfully";
  }
 
//connection closed
mysql_close($connection);
?>

