<?php

/*
 Description : cette classe gerera les utilisateurs et plusieurs fonction y seront ajouter : tel que 'ajout , la supression ,....
*/
abstract class usersAbs
{
    // Notre méthode abstraite nous oblige a definir nos functions fille ici avant!
    abstract protected function verification($nom,$email,$email_confirme,$passwd);
	abstract protected function insertion($nom,$email,$email_confirme,$passwd);


}

class users extends usersAbs
{
	private $db;
	
	/*<*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*>*/
	
	//constructeur
	public function __construct($db) {
		$this->db = $db;		
	}
	
	/*<*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*>*/
	/*<*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*><*>*/
	/*
	
	function qui verifie : c'est une fonction qui verifie si tous les champs sont bien remplis
	*/
	
	function verification($nom,$email,$email_confirme,$passwd){
		 
		   $test=false;
		   $alr=new alert;
		   
		//si tous les champs sont bien remplis
		if(strlen($nom)>=4 && $email && $email_confirme && strlen($passwd)>=4 && $email_confirme==$email && filter_var($email, FILTER_VALIDATE_EMAIL)){
			$test = true;
			
		}else{
		
			//affichage des erreurs
			echo $alr->alerte ('Veuillez-vous bien remplir les champs', 'danger', true, 'Erreur');
			
		}
		return $test;
	}
	
	/*
	fonction qui insert : c'est une fonction qui sert à effectuer l'insertion des informations (remplis par le visiteur) dans la base de données .
	*/
	function insertion($nom,$email,$email_confirme,$passwd){
		 $alr=new alert;
		//recuperer les information remplit par le visiteurs

	
		//faire la verification
		if($this->verification($nom,$email,$email_confirme,$passwd)==true){	
			
			//on peux faire l'insertion.
			$date = date("Y-m-d");
			
			$info = array(
            "client_nom" => $nom,
			"client_date_inscription" => $date,
            "client_passwd" => $passwd,
			"client_email" => $email
            );
			
		 $req = $this->db->insert("client", $info);
		 echo $alr->alerte('votre inscription est bien effectuée ', 'Bienvenue', false);
		 return $req;
		 
		}else{
			echo $alr->alerte('votre inscription n été pas bien effectuée ', 'warning', true, 'Malheureusement');	
		}	 
		 
					
	}

}
?>
