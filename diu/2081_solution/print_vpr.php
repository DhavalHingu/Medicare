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
  <body onload="window.print();">

    <!-- start navigation -->
   

              <!--<li><a href="#about" class="smoothScroll">ABOUT</a></li>
            <li><a href="#team" class="smoothScroll">TEAM</a></li>
            <li><a href="#pricing" class="smoothScroll">PRICING</a></li>
            <li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
            <li><a href="#contact" class="smoothScroll">CONTACT</a></li>!-->
          </ul>
        </div>
      </div>
    </div><br><br><br><br>
    <!-- end navigation -->  <table class="data-table"><h1><font color="red">Government Hospital Diu</font></h1>
    <caption class="title"><div class="no"><input type="submit" class="submit-button" onclick="window.print();" value="Print" name="Print"><a href="print_vpr.php">(Print all)</a></div></caption>
    <thead>
<?php
  include('connect.php');
 

echo "<br>"; echo "<br>";
 echo "<b><center>"; echo "<h3>"; echo "<font color='blue'> Purchase Register  " ; echo "</font></h3>"; echo "</center></b>";



  
    
  $result1=mysql_query("SELECT * from purchase_register");
 
 

  echo "<tr>

 <th>ID</th>
 <th>Sup'Name</th>
<th>Challan_No</th>
<th>challan_Date</th>
 <th>Bill_No</th>
 <th>Bill_Date</th>
 
  </tr>  
      
    </thead>
    <tbody>";
  
$total=0;

       while ($row = mysql_fetch_array($result1))
    {
      
       echo "<tr>";
      

      echo "<td>".$row['sid']."</td>";
      echo "<td>".$row['sname']."</td>";
      echo "<td>".$row['cn']."</td>";
      echo "<td>".$row['cd']."</td>";
      echo "<td>".$row['bn']."</td>";
      echo "<td>".$row['bd']."</td>";
     
       echo "<tr>";
      echo "</tbody>";
      
    }
    ?>
    <?php

  echo "<tr>

 <th><font color='blue'><b><u>Medicine</u></b></font></th>
 <th><font color='blue'><b><u>Batch_no</u></b></font></th>
 <th><font color='blue'><b><u>cost</u></b></font></th>
 <th><font color='blue'><b><u>quantity</u></b></font></th>
 <th><font color='blue'><b><u>mfg</u></b></font></th>
 <th><font color='blue'><b><u>exp</u></b></font></th>
 <th><font color='blue'><b><u>total (₹)</u></b></font></th>

  </tr>  
      
    </thead>
    <tbody>";
       while ($row = mysql_fetch_array($result1))
    {
      
       echo "<tr>";
      

      echo "<td>".$row['medicine']."</td>";
      echo "<td>".$row['batch']."</td>";
      echo "<td>".$row['price']."</td>";
      echo "<td>".$row['quantity']."</td>";
      echo "<td>".$row['mfg']."</td>";
      echo "<td>".$row['exp']."</td>";
     echo "<td>".$row['total']."</td>";

       echo "</tr>";
      echo "</tbody>";
            $total += $row['total'];
    }
    ?>
    
    <tfoot>
      <tr>
        <th colspan="12">TOTAL ₹</th>
        <th><?=$total?></th>
      </tr>
    </tfoot>
    </table>
    </body>
  </html>