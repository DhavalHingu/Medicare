<?php
  include('connect.php');
  ?>

  <html>
	<head>
		<title>Submit Form Without Refreshing Page</title>

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



		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="css/refreshform.css" />
		<script src="js/refreshform.js"></script>
	<script src="js/jquery.js"></script>
	</head>
	<body> 
		<div id="mainform">
			<h2>Submit Form Without Refreshing Page</h2>
			<!-- Required div starts here -->

			<form id="form">
				<h3>Fill Your Information!</h3>
				<label>Case_No:</label>
				<br/>
				<input type="text" id="c" placeholder="Your Name"/><br/>
				<br/>
				<label>Date:</label>
				<br/>
				<input type="text" id="name" placeholder="Your Name"/><br/>
				<br/>
				<label>Name:</label>
				<br/>
				<input type="text" id="email" placeholder="Your Email"/><br/>
				<br/>
				<label>Age:</label>
				<br/>
                <input type="text" id="contact" placeholder="Your Mobile No."/><br/>
				<br/>
<label>Sex:</label>
				<br/>
				<input type="radio" name="gender" value="male">Male</input>
				<br/>
				<input type="radio" name="gender" value="female">Female</input>
				<br />
				<input type="radio" name="gender" value="other">Other</input>
<br/><br/>
<label>Religion:</label>
				<br/>
				<select id="r" name="med"><option>Hindu</option> <option>Muslim</option> <option>christian</option> <option>Other</option>  
				 </select>
				 <br /><br/>
 <label>Diagnosis:</label>
				<br/>
				<input type="text" id="diagnosis" /><br/>
				<br/>
				
			<p><label>Select Medicines:</label>
            <select name="drug_name" id="drug_name"  onchange="feestype(this.value);">
            <option value="">--select--</option>

        <?php
               
             $sel=mysql_query("SELECT `name` FROM `stock`") or die(mysql_error());
                        
            while($row=mysql_fetch_array($sel)){?>
            <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
        <?php } ?>
                            
        </select></p><br>
         <label>Batch_No:</label>
				<br/>
				<input type="text" id="cost" /><br/>
				<br/>
				 <label>Quantity:</label>
				<br/>
				<input type="text" id="name1" placeholder="Your Name"/><br/>
				<br/>

					<input type="button" id="submit" value="Submit"/>
					<input type="reset">
				</form>
			

		<!-- Right side div -->
			<div id="formget">
			<!--<form id="form">

			<h3>Fill Your Information!</h3>
				<label>Name:</label>
				<br/>
				<input type="text" id="name" placeholder="Your Name"/><br/>
				<br/>
				<label>Email:</label>
				<br/>
				<input type="text" id="email" placeholder="Your Email"/><br/>
				<br/>
				<label>Contact No.</label>
				<br/>
				<input type="text" id="contact" placeholder="Your Mobile No."/><br/>
				<br/>
				<input type="button" id="submit" value="Submit"/>
         </form>!-->
			</div>

		</div>
	</body>
</html>
 