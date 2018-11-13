<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=OPD_summary.xls");
			echo "Medicine". "\t" ."Batch_No". "\t" ."Sold_Date"."\t"."Solld_Quantity".  "\n";
			$abc=mysql_query("select * from `details`");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['medicine'];
			$date= $row['batch_no'];
			$total_fees= $row['date'];
			$a=$row['quantity'];
				
			echo $name. "\t" .$date. "\t" .$total_fees. "\t" .$a.  "\n";
				
			}
			
				
				//header('location: ml.php');
		?>