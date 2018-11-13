<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "root", "");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("pharma", $connection);

//Fetching Values from URL 
$cc=$_POST['case_no']; 
$name2=$_POST['date'];
$email2=$_POST['name'];
$contact2=$_POST['age'];
$dd=$_POST['sex'];
$ee=$_POST['religion'];
$ff=$_POST['diagnosis'];
$gg=$_POST['drug_name'];
$hh=$_POST['batch_no'];
$hhh=$_POST['qu'];
//Insert query                                                                                               
  $query = mysql_query("insert into details(case_no, date, name,age,sex,religion,diagnosis,medicine,batch_no,quantity) values ('$cc','$name2','$email2','$contact2','$dd','$ee','$ff','$gg',
  	'$hh','$hhh')");

  $query1 = mysql_query("insert into final_disp(medicine,batch_no,quantity) values ('$gg','$hh','$hhh')");
  
  if(!$query1)
  {
  	echo "not";
  }

  if($query){
  echo "Data Submitted succesfully";
  }
 ?>
 <div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>no</th>
        <th>Medicines</th>
        <th>Batch_no</th>
        <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
    <?php 
         $ans111=mysql_query("SELECT * FROM `final_disp`");
         $nnnn=mysql_num_rows($ans111);
         for($iii=1;$iii<$nnnn;$iii++)
         {
          $value11=mysql_fetch_array($ans111);
     ?>
      <tr>
        <td><?php echo "$value11[0]" ?></td>
        <td><?php echo "$value11[1]" ?></td>
        <td><?php echo "$value11[2]" ?></td>
        <td><?php echo "$value11[3]" ?></td>
      </tr>
      <?php 
         }
      ?>
    </tbody>
  </table>
</div><?php
//connection closed
mysql_close($connection);
?>
