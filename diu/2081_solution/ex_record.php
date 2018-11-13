<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=recorder_level.xls");
			echo "Medicine". "\t" ."Recorder Level". "\t" ."Current Recorder Level". "\n";
			$abc=mysql_query("select * from `recorder`");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['medicine'];
			$date= $row['total'];
			$total_fees= $row['current'];
			
			echo $name. "\t" .$date. "\t" .$total_fees. "\n";
				
			}
			
				
				//header('location: ml.php');
		?>