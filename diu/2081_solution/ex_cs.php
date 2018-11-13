<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=critical_stock.xls");
			echo "medicine". "\t" ."recorder level". "\t" ."current recorder".  "\n";
			$abc=mysql_query("SELECT * FROM recorder WHERE current <= 30");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['medicine'];
			$date= $row['total'];
			$total_fees= $row['current'];
			echo $name. "\t" .$date. "\t" .$total_fees.  "\n";
				
			}
			
				
				//header('location: ml.php');
		?>