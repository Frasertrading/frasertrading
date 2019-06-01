$(document).ready(function() {
$("#submit_btn").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var city= $("#city").val();
var province= $("#province").val();
var message =$("#message").val();


if (name !== '' && email !== '' && city !== '' && province !== '' && message !=='') {
	
// Returns successful data submission message when the entered information is stored in database.

$.post("sendmail.php", {
name: name,
email: email,
city: city,
province: province,
message: message,
}, function(data) {
alert(data);
$('#contact_form')[0].reset(); // To reset form fields
});
}
});
});