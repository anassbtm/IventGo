
	var mdpInfo  = $('#LabelPassword');
	var EmailInfo = $('#LabelEmail');


	
	EmailInfo.hide();
	mdpInfo.hide();
	
	//checkConditions
	

	
	function valider_pass(){
	    var mdp = $("#Lpassword");		
	    var exp1 = /\d+/; //contient au moins 1 chiffre
	    var exp2 = /[A-Z]+/; //contient au moins 1 majuscule
     
	    if(mdp.val().length < 4){
	    mdp.addClass("error").removeClass("success");
		mdpInfo.show();
	    mdpInfo.text(" - Au moins 4 lettres!");
	    mdpInfo.addClass("alert alert-info fade in margin-bottom-5");
	    return false;
	    }
	    else if(!exp1.test(mdp.val())){
	        mdp.addClass("error").removeClass("success");
			mdpInfo.show();
	        mdpInfo.text(" - Au moins 1 chiffre!");
	        mdpInfo.addClass("alert alert-info fade in margin-bottom-5");
	        return false;
	    }
	    else if(!exp2.test(mdp.val())){
			mdpInfo.show();
	        mdp.addClass("error").removeClass("success");
	        mdpInfo.text(" - Au moins 1 majuscule!");
	        mdpInfo.addClass("alert alert-info fade in margin-bottom-5");
	        return false;
	    }
	    else{
	        mdp.removeClass("error");
			mdp.addClass("success");
	        mdpInfo.removeClass("alert alert-info fade in margin-bottom-5");
			mdpInfo.text('');
	        return true;
	    }
	}

	function isValidEmail(emailText) {
	    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	    return pattern.test(emailText);
	};
	function valider_mail(){
		var mail = $('#Lmail').val();
		if (mail == "" || (!isValidEmail(mail))  ){
			$('#Lmail').addClass("error");
			EmailInfo.show();	
			$('#Lmail').removeClass("success");
		    EmailInfo.text(" format invalide");
		    EmailInfo.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Lmail').removeClass("error");
			$('#Lmail').addClass("success");
			EmailInfo.hide();	
		    EmailInfo.text(" Au moins 4 caractere");
		    EmailInfo.addClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	$('#Ubutton').click(function(e){
		if(valider_mail() && valider_pass() ){
			$('#form1').submit();
			
		}else{
			
			valider_mail();
			valider_pass();			
				$('#Lpassword').keyup(function(){
					valider_pass();	
				});

				$('#Lmail').keyup(function(){
					valider_mail();	
				});			
		}
	});

