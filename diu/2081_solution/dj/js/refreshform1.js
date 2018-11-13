$(document).ready(function(){  
$("#submit").click(function(){
var a = $("#id").val();
var b = $("#name").val();
var c = $("#challan").val();
var d = $("#date").val();
var e = $("#bill").val();
var f = $("#date1").val();
var g = $("#drug_name").val();
var h = $("#cost").val();
var i= $("#price").val();
var j = $("#qun").val();
var k = $("#mfg").val();
var l = $("#exp").val();
var m = $("#level").val();

if(a ==''|| b==''|| c==''){
alert("Insertion Failed Some Fields are Blank....!!");   	
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform1.php",{  a: a, b: b, c: c, d: d, e: e, f: f, g: g, h: h, i: i, j: j, k: k, l: l, m: m  },
			function(data) {
			alert(data);
			$('#drug_name').val("");
			$('#cost').val(""); //To reset form fields
			$('#price').val("");
			$('#qun').val("");
			
			$('#level').val("");
			});
    
    }
});
});
