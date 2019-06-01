$(document).ready(function() {
$("#submit_btn2").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var phone= $("#phone").val();
var message =$("#message").val();


if (name !== '' && message !=='') {
	
// Returns successful data submission message when the entered information is stored in database.

$.post("contact.php", {
name: name,
email: email,
phone: phone,
message: message,
}, function(data) {
alert(data);
$('#contact_form')[0].reset(); // To reset form fields
});
}
});
});