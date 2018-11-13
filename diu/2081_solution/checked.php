<?php
include('connect.php');
session_start();
if(isset($_POST['case_no']))
{
$case_no=$_POST['case_no'];
	$date=$_POST['date'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$diagnosis=$_POST['diagnosis'];
	
	
	$_SESSION['case_no']=$case_no;
	$_SESSION['date']=$date;
	$_SESSION['name']=$name;
	$_SESSION['age']=$age;
	$_SESSION['diagnosis']=$diagnosis;
	
						
}
if(isset($_POST['drug_name']))
{
	$drug=$_POST['drug_name'];
	$strength=$_POST['strength'];
	$dose=$_POST['dose'];
	$quantity=$_POST['quantity'];
	$sql=mysql_query("INSERT INTO preception(case_no,date,name,age,diagnosis,drug_name,strength,dose,quantity)
						VALUES('{$_SESSION['case_no']}','{$_SESSION['date']}','{$_SESSION['name']}','{$_SESSION['age']}','{$_SESSION['diagnosis']}','{$drug}','{$strength}','{$dose}','{$quantity}')");
	
	echo "<table width=\"100%\" border=1>";
        echo "<tr> 
		<th>Drug</th> 
		<th>Strength </th>
		<th>Dose</th>
		<th>Quantity </th></tr>";
        // loop through results of database query, displaying them in the table
		 $result = mysql_query("SELECT * FROM preception")or die(mysql_error());
        while($row = mysql_fetch_array($result)) 
		{
                // echo out the contents of each row into a table
                echo "<tr>";
                
				echo '<td>' . $row['drug_name'] . '</td>';
				echo '<td>' . $row['strength'] . '</td>';
				echo '<td>' . $row['dose'] . '</td>';
				echo '<td>' . $row['quantity'] . '</td>';
				}
 echo "</table>";
}
?>