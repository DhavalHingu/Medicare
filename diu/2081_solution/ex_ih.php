<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=individual_history.xls");
			echo "Case_No". "\t" ."Sex". "\t" ."Age". "\t" ."Religion"."\t"."Date Of OPD". "\t" ."Diagnosis". "\n";
			$abc=mysql_query("select * from `details`");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['case_no'];
			$date= $row['sex'];
			$total_fees= $row['age'];
			$a=$row['religion'];
			$b=$row['date'];
			$c=$row['diagnosis'];
			
			echo $name. "\t" .$date. "\t" .$total_fees. "\t" .$a. "\t" .$b. "\t" .$c. "\n";
				
			}
			
				
				//header('location: ml.php');
		?>