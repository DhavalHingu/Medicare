<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
  
  <title></title>
  
  <link rel='stylesheet' type='text/css' href='css/style.css' />
  <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
  <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='js/example.js'></script>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
  </script>

</head>

<body>
<?php
   include '../connect.php';
  $a=$_POST['case'];


  if(isset($_POST['submit']))
  {
    $result=mysql_query("select * from details where case_no LIKE '$a'");
  

while($row=mysql_fetch_array($result))
{
  $a=$row['case_no'];
 $b= $row['sex'];
  $c=$row['age'];
  $d=$row['religion'];
  $e=$row['date'];
  $f=$row['diagnosis'];
  
}

?>
<center><input name="b_print" type="button" class="ipt"   onClick="printdiv('div_print');" value=" Print ">
</center>
 <div id="div_print">
  <div id="page-wrap">

    <textarea id="header">INVOICE</textarea>
  
    
    <div id="identity"></div>
    
                <div style="clear:both"></div>
    
    <div id="customer">
    

            <textarea id="customer-title">Government Hospital Diu</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Case #</td>
                    <td><label><?php echo $a; ?></label></td>
                </tr>
                
                <tr>

                    <td class="meta-head">Date Of OPD</td>
                    <td><label id="date"><?php echo $e; ?></label></td>
                </tr>
                <tr>
                    <td class="meta-head">Sex</td>
                    <td><div class="due"><?php echo $b; ?></div></td>
                </tr>
              <tr>
                    <td class="meta-head">Age</td>
                    <td><div class="due"><?php echo $c; ?></div></td>
                </tr>
                <tr>
                    <td class="meta-head">Religion</td>
                    <td><div class="due"><?php echo $d; ?></div></td>
                </tr>


               


            </table>
    
    </div>
    
    <table id="items">
    
      <tr>
          <th>Diagnosis</th>
          
          
      </tr>
      
      <tr class="item-row">
          
          <td class="item-name"><div class="delete-wpr"><label><?php echo $f; ?> </label></div></td>
          </tr>
      </table>
      
      <br>
      <br>
       
    </table>
    <br>
    <br>
    <br>
    <br>

    <div id="terms">
      <h5>Quotes</h5>
      <label>Be Healthy,Be Strong</label>
    </div>
  
  </div>
  </div>
  </div>
<?php } ?>
  
</body>

</html>