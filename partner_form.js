
	var InfoPrenom   = $('#LabelPrenom');
	var InfoLogin   = $('#LabelLogin');
	var InfoDate = $('#LabelDate');
	var InfoTel   = $('#LabelTel');
	var InfoVille   = $('#LabelVille');
	var Infocountry   = $('#Labelcountry');
	var InfoAdresse   = $('#LabelAdresse');
	var InfoSiret  = $('#LabelSiret');
	var InfoTVA  = $('#LabelTva');
	var InfoRegime  = $('#LabelRegime');
	
	InfoPrenom.hide();
	InfoLogin.hide();
	InfoDate.hide();
	InfoTel.hide();
	InfoVille.hide();
	Infocountry.hide();
	InfoAdresse.hide();
	InfoSiret.hide();
	InfoTVA.hide();
	InfoRegime.hide();
	
	
	function valider_prenom(){
		if ($('#Pname').val() == "" || $('#Pname').val().length<3){
			$('#Pname').addClass("error");	
			$('#Pname').removeClass("success");
		    InfoPrenom.show();
			InfoPrenom.text(" Au moins 4 caractere");
		    InfoPrenom.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Pname').removeClass("error");
			$('#Pname').addClass("success");
		    InfoPrenom.text("");
		    InfoPrenom.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_Login(){
		if ($('#Login').val() == "" || $('#Login').val().length<3){
			$('#Login').addClass("error");	
			$('#Login').removeClass("success");
		    InfoLogin.show();
			InfoLogin.text(" Au moins un login de 4 caractere");
		    InfoLogin.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Login').removeClass("error");
			$('#Login').addClass("success");
		    InfoLogin.text("");
		    InfoLogin.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	
	function valider_Date(){
		if ($('#date1').val() == ""){
			$('#date1').addClass("error");	
			$('#date1').removeClass("success");
		    InfoDate.show();
			InfoDate.text(" Entrer votre vrais date");
		    InfoDate.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#date1').removeClass("error");
			$('#date1').addClass("success");
		    InfoDate.text("");
		    InfoDate.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_Tel(){
		if ($('#phone').val() == "" || $('#phone').val().length<7){
			$('#phone').addClass("error");	
			$('#phone').removeClass("success");
		    InfoTel.show();
			InfoTel.text(" Votre numéro de téléphone est incorrecte");
		    InfoTel.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Login').removeClass("error");
			$('#Login').addClass("success");
		    InfoTel.text("");
		    InfoTel.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_Ville(){
		if ($('#Ville').val() == "" || $('#Ville').val().length<2){
			$('#Ville').addClass("error");	
			$('#Ville').removeClass("success");
		    InfoVille.show();
			InfoVille.text("Votre ville");
		    InfoVille.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Ville').removeClass("error");
			$('#Ville').addClass("success");
		    InfoVille.text("");
		    InfoVille.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_country(){
		$(document).on("change", "#country", valider_country);
		if(document.getElementById('country').options[0].selected){
			$('#country').addClass("error");	
			$('#country').removeClass("success");
		    Infocountry.show();
			Infocountry.text("Votre Pays");
		    Infocountry.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#country').removeClass("error");
			$('#country').addClass("success");
		    Infocountry.text("");
		    Infocountry.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}

	function valider_Adresse(){
		if ($('#Adresse').val() == "" || $('#Adresse').val().length<3){
			$('#Adresse').addClass("error");	
			$('#Adresse').removeClass("success");
		    InfoAdresse.show();
			InfoAdresse.text(" Votre vrais adresse");
		    InfoAdresse.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Adresse').removeClass("error");
			$('#Adresse').addClass("success");
		    InfoAdresse.text("");
		    InfoAdresse.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	
		function valider_Siret(){
		if ($('#Siret').val() == "" || $('#Siret').val().length<3){
			$('#Siret').addClass("error");	
			$('#Siret').removeClass("success");
		    InfoSiret.show();
			InfoSiret.text(" Au moins un Siret de 4 caractere");
		    InfoSiret.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Siret').removeClass("error");
			$('#Siret').addClass("success");
		    InfoSiret.text("");
		    InfoSiret.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_TVA(){
		$(document).on("change", "#TVA", valider_TVA);
		if(document.getElementById('TVA').options[0].selected){
			$('#TVA').addClass("error");	
			$('#TVA').removeClass("success");
		    InfoTVA.show();
			InfoTVA.text(" TVA");
		    InfoTVA.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#TVA').removeClass("error");
			$('#TVA').addClass("success");
		    InfoTVA.text("");
		    InfoTVA.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	function valider_Regime(){
		$(document).on("change", "#Regime", valider_Regime);
		if(document.getElementById('Regime').options[0].selected){
			$('#Regime').addClass("error");	
			$('#Regime').removeClass("success");
		    InfoRegime.show();
			InfoRegime.text(" Regime");
		    InfoRegime.addClass("alert alert-info fade in margin-bottom-5");
			return false;
		}else{
			$('#Regime').removeClass("error");
			$('#Regime').addClass("success");
		    InfoRegime.text("");
		    InfoRegime.removeClass("alert alert-info fade in margin-bottom-5");
			return true;		
		}
	}
	
	
	
	$('#Ubutton').click(function(e){
		if(valider_prenom() && valider_Login() && valider_Date() && valider_Tel() && valider_Ville() && valider_country() && valider_Siret() && valider_Regime() && valider_TVA() && valider_Adresse()){
			$('#form1').submit();
			
		}else{
			valider_prenom()
			valider_Login();
			valider_Date();
			valider_Tel();
			valider_Adresse();
			valider_Ville();
			valider_country();
			valider_Siret();
			valider_TVA();
			valider_Regime();

				$('#Pname').keyup(function(){

				valider_prenom();
			});

				$('#Login').keyup(function(){

					valider_Login();	
				});	

				$('#date1').keyup(function(){
					valider_Date();	
				});
				
				$('#phone').keyup(function(){
					valider_Tel();	
				});	

				$('#Ville').keyup(function(){
				var str = $('#Ville').val();
				$('#Ville').val(str.toUpperCase());
					valider_Ville();	
				});
				
				$('#country').keyup(function(){
				var str = $('#country').val();
				$('#country').val(str.toUpperCase());
					valider_country();	
				});
				
				$('#Adresse').keyup(function(){

					valider_Adresse();	
				});				
			
				$('#Siret').keyup(function(){
					valider_Siret();	
				});

				$('#TVA').keyup(function(){
					valider_TVA();	
				});
				
				$('#Regime').keyup(function(){
					valider_Regime();	
				});

			
		}
	});
				$('#Ville').keyup(function(){
				var str = $('#Ville').val();
				$('#Ville').val(str.toUpperCase());
					valider_Ville();	
				});

	


