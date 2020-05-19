$(document).ready(function(){
	$("#submit").click(function(){
		if($("password").val() != $("confirm_password").val()){
			alert("Enter password correctly!");
		}else{
			$("register-from").submit();
		}
	});
});