<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=Paitent_Details.xls");
			echo "Case No". "\t" ."Age". "\t" ."Sex"."\t"."Religion". "\t" ."Diagnosis".  "\n";
			$abc=mysql_query("select * from `details`");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['case_no'];
			$date= $row['age'];
			$total_fees= $row['sex'];
			$a=$row['religion'];
				$b=$row['diagnosis'];
			echo $name. "\t" .$date. "\t" .$total_fees. "\t" .$a. "\t" .$b.  "\n";
				
			}
			
				
				//header('location: ml.php');
		?>