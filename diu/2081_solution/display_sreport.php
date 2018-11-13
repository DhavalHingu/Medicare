<html>
<head>
  <title>Invoice</title>
  <link rel="stylesheet" href="bootstrap.min.css">
     <!--<link rel="stylesheet" href="style.css">!-->
     
  <style type="text/css">
    body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
      font-size: 12px;
      width:05px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
      text-transform: uppercase;
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 14px;
      min-width: 537px;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #508abb;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }

    /* Table Body */
    .data-table tbody td {
      color: #353535;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .data-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #e5f5ff;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: blue;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: green;
}
</style>
<style type="text/css">

* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }

body { height: 100%; background-color: #FFFFFF; font: 1.2em Verdana, Arial, Helvetica, sans-serif; }


/* ==================== Form style sheet ==================== */

form { margin: 25px 0 0 29px; width: 450px; padding-bottom: 30px; }

fieldset { margin: 0 0 22px 0; border: 1px solid #095D92;  background-color: #DFF3FF; }
legend { font-size: 1.1em; background-color: #095D92; color: #FFFFFF; font-weight: bold; padding: 4px 8px; }

label.float { float: left; display: block; width: 100px; margin: 4px 0 0 0; clear: left; }
label { display: block; width: auto; margin: 0 0 10px 0; }
label.spam-protection { display: inline; width: auto; margin: 0; }

input.inp-text, textarea, input.choose, input.answer { border: 1px solid #909090; padding: 3px; }
input.inp-text { width: 300px; margin: 0 0 8px 0; }
textarea { width: 400px; height: 150px; margin: 0 0 12px 0; display: block; }

input.choose { margin: 0 2px 0 0; }
input.answer { width: 40px; margin: 0 0 0 10px; }
input.submit-button { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; display: block; margin: 23px 0 0 0; }

form br { display: none; }

/* ==================== Form style sheet END ==================== */

</style>


    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- animate -->
    <!--<link rel="stylesheet" href="css/animate.min.css">
    <bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    !-->
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
  @media print {
    .no {
      display: none;
    }
}

</style>
  </head>
  <body>

    <!-- star navigation -->
    <div class="no">
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
            <span class="icon icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">HOME</a></li>
                  <div class="dropdown">
  <button class="dropbtn">Master</button>
  <div class="dropdown-content">
    <a href="med.php">Medicines</a>
    <a href="sup.php">Suppliers</a>
    <a href="cen.php">Centers</a>
  </div>
</div> 
            <div class="dropdown">
  <button class="dropbtn">Medicines</button>
  <div class="dropdown-content">
    <a href="stock.php">Stock Entry</a>
    <a href="dj/final.php">Issue</a>
    <a href="dj/transfer.php">Issue To Centers</a>
    <a href="dj/pr.php">Purchase Register</a>
    <a href="vpr.php">View Purchase Register</a>
  </div>
</div> 
<div class="dropdown">
  <button class="dropbtn">Reports</button>
  <div class="dropdown-content">
    <a href="sr.php">Stock Report</a>
    <a href="ih.php">Individual History</a>
    <a href="os.php">OPD Summary</a>
    <a href="pd.php">Paitient's Details</a>
    <a href="login.php">Monthly Reports</a>
    <a href="sreport.php">Statistical Reports</a>
    <a href="cs.php">Critical Stocks</a>
    <a href="res.php">Recent Expiry Stock</a>
    <a href="ml.php">Medicines List</a>
    <a href="dl.php">Diagnoses List</a>
    <a href="cl.php">Centers List</a>
    <a href="sl.php">Suppliers List</a>
  </div>
</div> 

              <!--<li><a href="#about" class="smoothScroll">ABOUT</a></li>
            <li><a href="#team" class="smoothScroll">TEAM</a></li>
            <li><a href="#pricing" class="smoothScroll">PRICING</a></li>
            <li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
            <li><a href="#contact" class="smoothScroll">CONTACT</a></li>!-->
          </ul>
        </div>
      </div>
    </div> </div><br><br><br><br>
    <!-- end navigation -->  <table class="data-table"><h1><font color="red">Government Hospital Diu</font></h1>
    <caption class="title"><div class="no"> <a href="#" onclick="window.print();" style="color: red;">(Print all)</a><-------><a href="ex_sreport.php" style="color: red;">(Download Excel File)</a><br> <a href="#" onclick="window.print();"><font color="red">print</font></a></div></caption>
    <thead>
<?php
  include('connect.php');
  $a=$_POST['from'];
$b=$_POST['to'];
echo "<br>"; echo "<br>";
 echo "<b><center>"; echo "<h3>"; echo "<font color='blue'> Statistical Report"; echo "</font></h3>"; echo "</center></b>";


if(isset($_POST['submit']))
  {
    $result=mysql_query("SELECT sum(sex='male') AS male,sum(sex='female') AS female, sum(sex='other') AS other,count(sex) AS total,diagnosis,sum(religion='hindu') as hindu,sum(religion='muslim') as muslim,sum(religion='christian') as c, sum(religion='other') as other, count(religion) as total1, age between '1' and '4' as a,age between '5' and '9' as b,age between '10' and '14' as i,age between '15' and '19' as d,age between '20' and '24' as e,age between '25' and '29' as f,age between '30' and '34' as g,age between '35' and '39' as h,age between '40' and '44' as i,age between '45' and '49' as j,age between '50' and '54' as k,age between '55' and '59' as l,age between '60' and '64' as m,age between '65' and '69' as n,age between '70' and '120' as o from details where date BETWEEN '$a' AND '$b' GROUP BY diagnosis");

 
 

  echo "<tr>
 <th>Deases</th>
 <th>Male</th>
 <th>Female</th>
<th>Other</th>
<th><font color='red'>Total</font></th>
<th>h</th>
<th>m</th>
<th>c</th>
<th>o</th>
<th><font color='blue'>Total</font></th>
<th>1-4</th>
<th>5-9</th>
<th>10-14</th>
<th>15-19</th>
<th>20-24</th>
<th>25-29</th>
<th>30-34</th>
<th>35-39</th>
<th>40-44</th>
<th>45-49</th>
<th>50-54</th>
<th>55-59</th>
<th>60-64</th>
<th>65-69</th>
<th>70+</th>
 </tr>  
      
    </thead>
    <tbody>";
    

       while ($row = mysql_fetch_array($result))
    {
      
       echo "<tr>";
      
echo "<td>".$row['diagnosis']."</a></td>";
      echo "<td>".$row['male']."</td>";
      echo "<td>".$row['female']."</td>";
      echo "<td>".$row['other']."</td>";
      echo "<td> <font color = 'red'> <b>".$row['total']."</b></font></td>";
      echo "<td>".$row['hindu']."</td>";
      echo "<td>".$row['muslim']."</td>";
      echo "<td>".$row['c']."</td>";
      echo "<td>".$row['other']."</td>";
      echo "<td> <font color='blue'> <b>".$row['total1']."</b></font></td>";
      echo "<td>".$row['a']."</td>";
      echo "<td>".$row['b']."</td>";
      echo "<td>".$row['i']."</td>";
      echo "<td>".$row['d']."</td>";
      echo "<td>".$row['e']."</td>";
      echo "<td>".$row['f']."</td>";
      echo "<td>".$row['g']."</td>";
      echo "<td>".$row['h']."</td>";
      echo "<td>".$row['i']."</td>";
      echo "<td>".$row['j']."</td>";
      echo "<td>".$row['k']."</td>";
      echo "<td>".$row['l']."</td>";
      echo "<td>".$row['m']."</td>";
      echo "<td>".$row['n']."</td>";
      echo "<td>".$row['o']."</td>";
      echo "</tr>";
      echo "</tbody>";
      
    }

    ?>
    </table>
  <?php } ?>
  </body>
  </html>