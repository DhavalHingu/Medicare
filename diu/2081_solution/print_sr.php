<!DOCTYPE html>
<html>
<head>
  <title></title>
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
      font-size: 40px;
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
</head>
<body onload="window.print();">



<h1><font color="red">Government Hospital Diu</font></h1>
<table class="data-table">

    <caption class="title">Stock Report</caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>medicine</th>
        <th>TYPE</th>
        <th>batch_no</th>
        <th>Exp Date</th>
        <th>batch_no</th>
        <th>Total Stock</th>
        <th>Present Stock</th>
      </tr>
    </thead>
    <tbody>
    <?php
include("connect.php");
 $result=mysql_query("SELECT * from stock_current");
  while ($row = mysql_fetch_array($result))
    {
      
       echo "<tr>";
      
echo "<td>" .$row['id']."</a></td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['type']."</td>";
      echo "<td>".$row['batch']."</td>";
      echo "<td>".$row['exp']."</td>";
      echo "<td>".$row['quantity']."</td>";
      echo "<td>".$row['current']."</td>";
      echo "</tr>";
      
      
    }?>
    </tbody>
    <tfoot>
      <tr>
        </tr>
    </tfoot>
  </table>
  </body>
  </html>
