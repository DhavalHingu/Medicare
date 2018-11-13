<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("pharma", $connection);

//Fetching Values from URL 
$cc=$_POST['a']; 
$cd=$_POST['b'];
$ce=$_POST['c'];
$cf=$_POST['d'];
$cg=$_POST['e'];
$ch=$_POST['f']; 
//Insert query                                                                                               
  $query = mysql_query("insert into transfer(center,code,date,medicine,batch_no,quantity) values ('$cc','$cd','$ce','$cf','$cg','$ch')");
  if($query){
  echo "Data Submitted succesfully";
  }
  else
  {
  	echo mysql_error();
  }
 
//connection closed
mysql_close($connection);
?>
