function add_bio(bio){
	var bio = $.trim(bio);
	if(bio.length == ""){
		$(".bio-error").html("Bio is required");
	} else {
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?bio=true',
			data : {'bio' : bio},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})
	}
}

function add_facebook_account(facebook_val){
	var facebook_val = $.trim(facebook_val);
	var facebook_url = /^(http|https)\:(\/\/)(www)\.facebook\.com(\/)[a-zA-Z0-9]+$/;
	if(facebook_val.length == ""){
		$(".facebook-error").html('Facebook Field is required');
		$("#add_facebook").css("border-color","red");
	} else if(facebook_url.test(facebook_val)){
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_facebook=true',
			data : {'facebook_val': facebook_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} else {
		$(".facebook-error").html('Invalid Facebook URL');
		$("#add_facebook").css("border-color","red");
	}
}

function add_linkedin_url(linkedin_val){
	var linkedin_val = $.trim(linkedin_val);
	var linkedin_url = /^(http|https)\:(\/\/)(www)\.linkedin\.com(\/)[a-zA-Z0-9]+$/;
	if(linkedin_val.length == ""){
		$(".linkedin-error").html('Linkedin Field is required');
		$("#add_linkedin").css("border-color","red");
	} else if(linkedin_url.test(linkedin_val)){
		$.ajax({
			type : 'POST',
			url  : 'ajax/profile.php?add_linkedin=true',
			data : {'linkedin_val': linkedin_val},
			dataType : 'JSON',
			success : function(feedback){
				if(feedback['error'] == 'success'){
					location = 'index.php';
				}
			}
		})

	} else {
		$(".linkedin-error").html('Invalid Linkedin URL');
		$("#add_linkedin").css("border-color","red");
	}
}