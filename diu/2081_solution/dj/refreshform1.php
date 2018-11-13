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
$ff=$_POST['g'];
$gg=$_POST['h'];
$hh=$_POST['i'];
$hhh1=$_POST['j'];
$hhh2=$_POST['k'];
$hhh3=$_POST['l'];
$hhh4=$_POST['m'];
//Insert query                                                                                               
  $query = mysql_query("insert into purchase_register(sid,sname,cn,cd,bn,bd,medicine,batch,price,quantity,mfg,exp,total) values ('$cc','$name2','$email2','$contact2','$dd','$ee','$ff','$gg','$hh','$hhh1','$hhh2','$hhh3','$hhh4')");
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
