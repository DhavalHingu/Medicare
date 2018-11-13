$(document).ready(function(){  
$("#submit").click(function(){
var case_no = $("#c").val();
var date = $("#name").val();
var name = $("#email").val();
var age = $("#contact1").val();
var sex = $("input[type=radio]:checked").val();
var religion = $("#r").val();
var diagnosis = $("#diagnosis").val();
var drug_name = $("#drug_name").val();
var batch_no = $("#cost").val();
var y = $("#name1").val();


if(drug_name ==''|| batch_no==''|| y==''){
alert("Insertion Failed Some Fields are Blank....!!");   	
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("refreshform.php",{  case_no: case_no, date: date, name: name, age: age, sex: sex, religion: religion, diagnosis: diagnosis, drug_name: drug_name, batch_no: batch_no, qu: y},
			function(data) {
			$("#ld").html(data);
			$('#drug_name').val("");
			$('#cost').val(""); //To reset form fields
			$('#name1').val("");
			});
    
    }
});
});
