<?php 
    include 'connect.php';
  /* Check Login form submitted */  
  if(isset($_POST['Submit'])){
     $username = $_POST['name'];
       $password = $_POST['password'];
         
    $sqlquery = mysql_query("SELECT * FROM `login` WHERE name='$username' && password='$password'");
    $row=mysql_fetch_array($sqlquery);
    $count = mysql_num_rows($sqlquery);
  if($count==1)
  {
    
    
       header("Location: mr.php");
  }
  else
  {
    header("Location: login.php");
  }
}

?>