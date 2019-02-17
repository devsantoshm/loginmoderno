$(document).ready(function(){
	var name     = "";
	var email    = "";
	var password = "";
	var confirm  = "";

	$("#name").focusout(function(){
		
		var store = $("#name").val();
		
		if(store.length == ""){
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");

		} else {
			alert(store);
		}	
	})
})