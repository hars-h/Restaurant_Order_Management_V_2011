$(document).ready(function(){
$("#submit").click(function(){
var tno = $("#tno").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'tno='+ tno;
if(tno=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "addusr.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});