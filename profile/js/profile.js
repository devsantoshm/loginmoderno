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