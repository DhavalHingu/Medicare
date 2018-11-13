<?php
include 'connect.php';

    if(isset($_POST['submit'])){
  $date=$_POST['date'];    
  $name=$_POST['name'];
  $type=$_POST['type'];
  $batch=$_POST['batch'];
  $qun=$_POST['qun'];
  $exp=$_POST['exp'];
  
  


    $sqlquery = "INSERT INTO `stock`(`date`, `name`, `type`, `batch_no`, `quantity`, `exp`) VALUES ('$date','$name','$type','$batch','$qun',
    '$exp')";
  


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
  
  
  if($result)
  
 
  {
    
    
      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Stock Registered Successfully!')
    window.location.href='stock.php';
    </SCRIPT>");

  }
  else
  {
    echo "not";
  }
}


?>