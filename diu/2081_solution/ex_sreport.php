<?php
  include('connect.php');

  header("Content-type: application/vnd.ms-excel; name='excel'");
			header("Content-Disposition: attachment; filename=statistical.xls");
			echo "diagnosis". "\t" ."male". "\t" ."female"."\t"."other". "\t" ."total". "\t" ."H"."\t" ."M"."\t" ."C"."\t" ."O"."\t" ."total"."\t" ."one-four"."\t" ."five-nine"."\t" ."ten-14"."\t" ."15-19"."\t" ."20-24"."\t" ."25-29"."\t" ."30-34"."\t" ."35-39"."\t" ."40-44"."\t" ."45-49"."\t" ."50-54"."\t" ."55-59"."\t" ."60-64"."\t" ."65-69"."\t" ."70+". "\n";
			$abc=mysql_query("SELECT sum(sex='male') AS male,sum(sex='female') AS female, sum(sex='other') AS other,count(sex) AS total,diagnosis,sum(religion='hindu') as hindu,sum(religion='muslim') as muslim,sum(religion='christian') as c, sum(religion='other') as other, count(religion) as total1, age between '1' and '4' as a,age between '5' and '9' as b,age between '10' and '14' as i,age between '15' and '19' as d,age between '20' and '24' as e,age between '25' and '29' as f,age between '30' and '34' as g,age between '35' and '39' as h,age between '40' and '44' as i,age between '45' and '49' as j,age between '50' and '54' as k,age between '55' and '59' as l,age between '60' and '64' as m,age between '65' and '69' as n,age between '70' and '120' as o from details GROUP BY diagnosis");
			while ($row=mysql_fetch_array($abc )){
			$name= $row['diagnosis'];
			$date= $row['male'];
			$a=$row['female'];
				$b=$row['other'];
				$c=$row['total'];
				$d=$row['hindu'];
				$e=$row['muslim'];
				$f=$row['c'];
				$g=$row['other'];
				$h=$row['total1'];
				$i=$row['a'];
				$j=$row['b'];
				$k=$row['c'];
				$l=$row['d'];
				$m=$row['e'];
				$n=$row['f'];
				$o=$row['g'];
				$p=$row['h'];
				$q=$row['i'];
				$r=$row['j'];
				$s=$row['k'];
				$t=$row['l'];
				$u=$row['m'];
				$v=$row['n'];
				$w=$row['o'];

			

			echo $name. "\t" .$date. "\t" .$a. "\t" .$b. "\t" .$c."\t" .$d."\t" .$e."\t" .$f."\t" .$g."\t" .$h."\t" .$i."\t" .$j."\t" .$k."\t" .$l."\t" .$m."\t" .$n."\t" .$o."\t" .$p."\t" .$q."\t" .$r."\t" .$s."\t" .$t."\t" .$u."\t" .$v."\t" .$w.  "\n";
				
			}
			
				
				//header('location: ml.php');
		?>