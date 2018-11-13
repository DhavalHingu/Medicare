<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=medicines_list.xls");
			echo "Medicine". "\t" ."type". "\t" ."Recorder Level". "\n";
			$abc=mysql_query("select * from `medicines`");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['medicine'];
			$date= $row['type'];
			$total_fees= $row['level'];
			
			echo $name. "\t" .$date. "\t" .$total_fees. "\n";
				
			}
			
				
				//header('location: ml.php');
		?>