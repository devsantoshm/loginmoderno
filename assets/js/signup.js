$(document).ready(function(){
	var name     = "";
	var email    = "";
	var password = "";
	var confirm  = "";
	var name_reg = /^[a-z ]+$/i
	var email_reg = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;

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

		} else {
			$(".name-error").html("Integer is not allowd!");
			$("#name").addClass("border-red");
			$("#name").removeClass("border-green");
			name = ""
		}	
	})

	$("#email").focusout(function(){

		var email_store = $.trim($("#email").val());

        if(email_store.length == ""){
	        $(".email-error").html("Email is required!");
		    $("#email").addClass("border-red");
		    $("#email").removeClass("border-green");
		    email = "";	

        }else if(email_reg.test(email_store)){
        	$.ajax({
                type : 'POST',
                url  : 'ajax/signup.php',
                dataType : 'JSON',
                data : {'check_email' : email_store},
                success : function(feedback){
                	//alert(feedback['name'])
                	if (feedback['error'] == 'email_success') {
                		alert("success")
                	} else if(feedback['error'] == 'email_fail'){
                		alert(feedback['message'])
                	}
                }
        	});

        }else{
	        $(".email-error").html("Invalid Email Formate!");
		    $("#email").addClass("border-red");
		    $("#email").removeClass("border-green");
		    email = "";
	    }
	})
})