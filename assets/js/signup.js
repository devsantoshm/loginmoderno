$(document).ready(function(){
	var name     = "";
	var email    = "";
	var password = "";
	var confirm  = "";
	var name_reg = /^[a-z ]+$/i

	$("#name").focusout(function(){
		
		var store = $.trim($("#name").val());
		
		if(store.length == ""){
			$(".name-error").html("Name is required!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = ""

		} else if(name_reg.test(store)){
			$(".name-error").html("");
			$("#name").addClass("border-green");
			$("#name").removeClass("border-red");
			name = store

		} else{
			$(".name-error").html("Integer is not allowd!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = ""
		}	
	})
})