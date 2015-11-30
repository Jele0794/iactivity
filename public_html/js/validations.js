var semester = $("#semester").val();
var email = $("#email-reg").val();
var password = $("#password-reg").val();

$("input#semester").bind('input propertychange', function(){
	if(semester < 0 || semester > 12){
		$("#semester").addClass("invalid");
	}
});


// If the mail is already on the database, it won't add it again.
// if($.get("search-mail.php")){
// 	alert.("Your e-mail is already registered.")
// }
