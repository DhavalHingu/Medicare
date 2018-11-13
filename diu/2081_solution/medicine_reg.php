<?php
include 'connect.php';

    if(isset($_POST['submit'])){
  $date=$_POST['fees_type'];    
  $name=$_POST['abcd'];
  $type=$_POST['level'];
  $eds=$_POST['cost'];
  


    $sqlquery = "INSERT INTO `medicines`(`medicine`, `type`, `level` , `batch`) VALUES ('$date','$name','$type','$eds')";
  


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
  
  
  if($result)
  
 
  {
    
    
      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registered Successfully!')
    window.location.href='med.php';
    </SCRIPT>");

  }
  else
  {
    echo "not";
  }
}


?>