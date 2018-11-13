<?php
include 'connect.php';

    if(isset($_POST['submit'])){
  $date=$_POST['code'];    
  $name=$_POST['center'];
  
  
  


    $sqlquery = "INSERT INTO `centers`(`code`, `center`) VALUES ('$date','$name')";
  


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
  
  
  if($result)
  
 
  {
    
    
      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Center added Successfully!')
    window.location.href='cen.php';
    </SCRIPT>");

  }
  else
  {
    echo "not";
  }
}


?>