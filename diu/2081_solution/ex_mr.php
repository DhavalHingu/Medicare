<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=month_report.xls");
			echo "medicine". "\t" ."type". "\t" ."close". "\t" ."open".  "\n";
			$abc=mysql_query("SELECT * FROM monthly WHERE MONTH(sold_date) = MONTH(CURRENT_DATE)");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['medicine'];
			$date= $row['type'];
			
			$a=$row['close'];
				$b=$row['open'];
			echo $name. "\t" .$date. "\t" .$a. "\t" .$b.  "\n";
				
			}
			
				
				//header('location: ml.php');
		?>