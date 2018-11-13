<?php
include 'connect.php';

    if(isset($_POST['submit'])){
  $date=$_POST['id'];    
  $name=$_POST['name'];
  $type=$_POST['add'];
  $batch=$_POST['city'];
  $qun=$_POST['pincode'];
 
  
  


    $sqlquery = "INSERT INTO `suppliers`(`sup_id`, `name`, `address`, `city`, `pincode`) VALUES ('$date','$name','$type','$batch','$qun')";
  


  $result=mysql_query($sqlquery);
 // $row=mysql_fetch_assoc($result);
   // $count = mysql_num_rows($result>0);
  
  
  if($result)
  
 
  {
    
    
      
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Supplier Information Registered Successfully!')
    window.location.href='stock.php';
    </SCRIPT>");

  }
  else
  {
    echo "not";
  }
}


?>