
	var NomInfostr   = $('#LabelNomstr');
	var NomInfo   = $('#LabelNom');
	var EmailInfo = $('#LabelEmail');
	
	
	EmailInfo.hide();
	NomInfostr.hide();
	NomInfo.hide();
	

	
	
	function valider_nomstr(){
		if ($('#Unamestr').val() == "" || $('#Unamestr').val().length<3){
			$('#Unamestr').addClass("error");	
			$('#Unamestr').removeClass("success");
		    NomInfostr.show();
			NomInfostr.text(" Au moins 4 caractere");
		    NomInfostr.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Unamestr').removeClass("error");
			$('#Unamestr').addClass("success");
		    NomInfostr.text("");
		    NomInfostr.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_nom(){
		if ($('#Uname').val() == "" || $('#Uname').val().length<3){
			$('#Uname').addClass("error");	
			$('#Uname').removeClass("success");
		    NomInfo.show();
			NomInfo.text(" Au moins 4 caractere");
		    NomInfo.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Uname').removeClass("error");
			$('#Uname').addClass("success");
		    NomInfo.text("");
		    NomInfo.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	function isValidEmail(emailText) {
	    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	    return pattern.test(emailText);
	};
	function valider_mail(){
		var mail = $('#Umail').val();
		if (mail == "" || (!isValidEmail(mail))  ){
			$('#Umail').addClass("error");
			EmailInfo.show();	
			$('#Umail').removeClass("success");
		    EmailInfo.text(" format invalide");
		    EmailInfo.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Umail').removeClass("error");
			$('#Umail').addClass("success");
			EmailInfo.hide();	
		    EmailInfo.text(" Au moins 4 caractere");
		    EmailInfo.addClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	$('#Ubutton').click(function(e){
		if(valider_mail() && valider_nom()  && valider_nomstr()){
			$('#form1').submit();
			
		}else{
			valider_mail();
			valider_nomstr()
			valider_nom();

			$('#Unamestr').keyup(function(){
				valider_nomstr();
			});
				$('#Uname').keyup(function(){
				valider_nom();
			});

				$('#Umail').keyup(function(){
					valider_mail();	
				});


			
		}
	});




