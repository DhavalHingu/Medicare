<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Home</title>
<!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
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

	</head>
	<body>

		<!-- start navigation -->
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
    <a href="pr.php">Purchase Register</a>
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
<div class="dropdown">
<button id="myBtn" class="dropbtn">About</button> 
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
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><font color="red">THIS SOFTWARE IS PREPARED FOR GOVERNMENT HOSPITAL DIU PHARMACY DEPARTMENT BY DHAVAL HINGU</FONT></p>
    <p><center> <h1> MEDICARE Version 1.0.1</h1></center></p>
 <p><center> <FONT COLOR="BLUE">THIS PROGRAM IS PROTECTED BY COPYRIGHT LAW. IF FOUND ANY UNAUTHORIZED ACCESS THE SOFTWARE WILL BE AUTOMATICALLY RESET..</FONT></center></p>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		<!-- start home -->

		<section id="home" class="text-center">
		<marquee><font color="blue">GOVERNMENT HOSPITAL DIU WELCOMES YOU...</font></marquee>
		  <div class="templatemo_headerimage">
		    <div class="flexslider">
		      <ul class="slides">
		        <li>
		        	<img src="images/images/1.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
							
					    </div>
				  	</div>
		        </li>
		       <li>
		        	<img src="images/images/2.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
							
					    </div>
				  	</div>
		        </li>
		       		<li>
		        	<img src="images/images/3.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
							
					    </div>
				  	</div>
		        </li>
		       <li>
		        	<img src="images/images/4.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
							
					    </div>
				  	</div>
		        </li>
		       <li>
		        	<img src="images/images/5.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
							
					    </div>
				  	</div>
		        </li>
		       <li>
		        	<img src="images/images/6.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><font color="red"><b></b></font></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span><font color="red"></font></span>
						</h2>
				
							
					    </div>
				  	</div>
		        </li>
		      </ul>
		    </div>
		  </div>				
		</section>
		<!-- end home -->

		<!-- start footer -->
		<footer>
		<marquee><font color="red"> This software is registered to Government Hospital Diu. </font></marquee>
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