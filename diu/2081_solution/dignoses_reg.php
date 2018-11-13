<?php
include 'connect.php';

    if(isset($_POST['submit'])){
  $date=$_POST['code'];    
  $name=$_POST['diagno'];
  
  
  


    $sqlquery = "INSERT INTO `diagnosis`(`code`, `diagno`) VALUES ('$date','$name')";
  


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