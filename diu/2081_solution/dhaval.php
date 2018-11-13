<!DOCTYPE html>
<html>
<head>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
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
<!-- =====/fetch cost ---------------- -->
</head>
<body>
<form method="" action="">
 <label>Select Medicines:</label>
            <select name="fees_type"  onchange="feestype(this.value);">
            <option value="">--select--</option>

        <?php
               include('connect.php');
             $sel=mysql_query("SELECT `name` FROM `stock`") or die(mysql_error());
                        
            while($row=mysql_fetch_array($sel)){?>
            <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                    
        <?php } ?>
                            
        </select>
<label>Batch_no</label>
        <input type="text" name="cost" id="cost">                                            

</form>
</body>
</html>

































