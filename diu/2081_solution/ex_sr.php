<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=stock_report.xls");
			echo "Id". "\t" ."Medicines". "\t" ."Type". "\t" ."Batch_no". "\t" ."Exp Date". "\t" ."Total Stock". "\t" ."Present Stock". "\n";
			$result=mysql_query("SELECT * from stock_current");
  while ($row = mysql_fetch_array($result))
    {
      
      
      
      $a= $row['id'];
      $b= $row['name'];
      $c= $row['type'];
      $d= $row['batch'];
      $e= $row['exp'];
      $f= $row['quantity'];
      $g= $row['current'];
      
      	echo $a. "\t" .$b. "\t" .$c. "\t" .$d. "\t" .$e. "\t" .$f. "\t" .$g.  "\n";
      
    
			
    }
				
			
			
				
				//header('location: ml.php');
		?>