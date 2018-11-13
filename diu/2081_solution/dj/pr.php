<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Purchase Register</title>
<!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
<script type="text/javascript">

function feestype(val)
{
 // alert(val); 
 $.ajax({
     type: 'post',
     url: 'dhaval1.php',
     data: {
       get_option:val
     },
     success: function (response) {
        //alert(response);
       document.getElementById("cost").value=response; 
     }
   });
}
</script>
<script type="text/javascript">

function feestype1111(val)
{
 // alert(val); 
 $.ajax({
     type: 'post',
     url: 'dhaval123.php',
     data: {
       get_option:val
     },
     success: function (response) {
        //alert(response);
       document.getElementById("challan").value=response; 
     }
   });
}
</script>
<script src="js/jquery.js"></script>
<script src="js/refreshform1.js"></script>
<script type="text/javascript">
function SetDate()
{
var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('date').value = today;
document.getElementById('date1').value = today;
document.getElementById('mfg').value = today;
document.getElementById('exp').value = today;
}
</script>
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
textarea { width: 300px; height: 60px; margin: 0 0 12px 0; display: block; }

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
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		!-->
		<link rel="stylesheet" href="../css/style.css">

	</head>
<body onload="SetDate();">
		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand"><img src="../images/logo.png" class="img-responsive" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../index.html">HOME</a></li>
					<div class="dropdown">
  <button class="dropbtn">Master</button>
  <div class="dropdown-content">
    <a href="../med.php">Medicines</a>
    <a href="../sup.php">Suppliers</a>
    <a href="../cen.php">Centers</a>
  </div>
</div> 
						<div class="dropdown">
  <button class="dropbtn">Medicines</button>
  <div class="dropdown-content">
    <a href="../stock.php">Stock Entry</a>
    <a href="final.php">Issue</a>
    <a href="transfer.php">Issue To Centers</a>
    <a href="pr.php">Purchase Register</a>
    <a href="../vpr.php">View Purchase Register</a>
  </div>
</div> 
<div class="dropdown">
  <button class="dropbtn">Reports</button>
  <div class="dropdown-content">
    <a href="../sr.php">Stock Report</a>
    <a href="../ih.php">Individual History</a>
    <a href="../os.php">OPD Summary</a>
    <a href="../pd.php">Paitient's Details</a>
    <a href="../login.php">Monthly Reports</a>
    <a href="../sreport.php">Statistical Reports</a>
    <a href="../cs.php">Critical Stocks</a>
    <a href="../res.php">Recent Expiry Stock</a>
    <a href="../ml.php">Medicines List</a>
    <a href="../dl.php">Diagnoses List</a>
    <a href="../cl.php">Centers List</a>
    <a href="../sl.php">Suppliers List</a>
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
		</div>
		<!-- end navigation -->
		<br><br><br>
<center>
	 <form oninput="level.value=parseInt(price.value)*parseInt(qun.value)" id="form">
		<!-- ============================== Fieldset 1 ============================== -->
		<fieldset>
			<legend>Purchase Register</legend><br>
			<label>Supplier Name:</label>
            <select name="drug_name" id="name"  onchange="feestype1111(this.value);">
            <option value="">--select--</option>

        <?php
               include('connect.php');
             $sel=mysql_query("SELECT `name` FROM `suppliers`") or die(mysql_error());
                        
            while($row=mysql_fetch_array($sel)){?>
            <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
        <?php } ?>
                            
        </select></p><br>
         <p><label>Id:</label>
				
				<input type="text" id="challan" /></p><br/>
				<p><label>Challan No:</label> <input type="text" name="cn" id="challan"></p><br>
		  	<p><label>Challan Date :</label> <input type="date" name="cd" id="date"></p><br>
			<p><label>Bill No :</label> <input type="text" name="bn" id="bill"></p><br>
			<p><label>Bill Date :</label> <input type="date" name="bdate" id="date1"></p><br>
		<label>Select Medicines:</label>
            <select name="drug_name" id="drug_name"  onchange="feestype(this.value);">
            <option value="">--select--</option>

        <?php
               include('connect.php');
             $sel=mysql_query("SELECT `name` FROM `stock`") or die(mysql_error());
                        
            while($row=mysql_fetch_array($sel)){?>
            <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
        <?php } ?>
                            
        </select></p><br>
         <p><label>Batch_No:</label>
				
				<input type="text" id="cost" /></p><br/>
				
			  <p><label>Cost:</label> <input type="text" name="price" id="price"></p><br>
			   <p><label>Quantity:</label> <input type="text" name="qun" id="qun"></p><br>
			    <p><label>Mfg Date:</label> <input type="date" name="mfg" id="mfg"></p><br>
			     <p><label>Exp Date:</label> <input type="date" name="exp" id="exp"></p><br> 
			 <p><label>Invoice Total:</label> <input type="text" name="level" id="level"></p><br>
			<input type="button" id="submit" value="Submit"/>
					<input type="reset">
		</fieldset>
		</form>
		<!-- ============================== Fieldset 1 end ============================== -->


		<!-- ============================== Fieldset 2 ============================== -->
		
		<!-- ============================== Fieldset 2 end ============================== -->


		<!-- ============================== Fieldset 3 ============================== -->
		
</center>
<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<p>Copyright &copy; 2017 Pharmacy</p>
						<small>Designed by <a rel="nofollow" href="#" target="_parent">Dhaval Hingu</a></small>
					</div>
					<div class="col-md-4 col-sm-5">
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							<li><a href="#" class="fa fa-github"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->


		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
			</body>
</html>