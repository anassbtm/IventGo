
	var Message   = $('#LabelMessage');
	var NomInfo   = $('#LabelNom');
	var EmailInfo = $('#LabelEmail');
	
	
	EmailInfo.hide();
	Message.hide();
	NomInfo.hide();
	

	
	
	function valider_message(){
		if ($('#UMessage').val() == "" || $('#UMessage').val().length<3){
			$('#UMessage').addClass("error");	
			$('#UMessage').removeClass("success");
		    Message.show();
			Message.text(" Au moins une phrase supérieure à 4 caractere");
		    Message.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#UMessage').removeClass("error");
			$('#UMessage').addClass("success");
		    NomInfo.text("");
		    NomInfo.removeClass("alert alert-info fade in margin-bottom-5");
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
		if(valider_mail() && valider_nom()  && valider_message()){
			$('#form1').submit();
			
		}else{
			valider_mail();
			valider_message()
			valider_nom();

			$('#UMessage').keyup(function(){
				var str = $('#UMessage').val();
				$('#UMessage').val(str.toUpperCase());
				valider_message();
			});
				$('#Uname').keyup(function(){
				var str = $('#Uname').val();
				$('#Uname').val(str.toUpperCase());
				valider_nom();
			});

				$('#Umail').keyup(function(){
					valider_mail();	
				});


			
		}
	});


	$('#Uname').keyup(function(){
		var str = $('#Uname').val();
		$('#Uname').val(str.toUpperCase());
	});


