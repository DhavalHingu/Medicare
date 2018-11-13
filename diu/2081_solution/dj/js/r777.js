$(document).ready(function(){  
$("#submit").click(function(){
var a = $("#c_name").val();
var b = $("#co").val();
var c = $("#dk").val();
var d= $("#drug_name").val();
var e= $("#cost").val();
var f= $("#name1").val();
if(d =='' || e =='' || f==''){
alert("Insertion Failed Some Fields are Blank....!!");   	
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("r777.php",{  a: a, b: b, c: c, d: d, e: e, f: f  },
			function(data) {
			alert(data);
			$('#drug_name').val("");
			$('#cost').val("");
			$('#name1').val("");
			});
    
    }
});
});
