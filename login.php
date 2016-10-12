<?php
include_once("inc/init.php");
$registre = new users($db);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Iventgo | Connexion</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">    

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/theme-colors/green.css">
	    <link rel="stylesheet" href="assets/css/plugins/hover-effect/css/custom-hover-effects.css">    

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head> 

<body>
<!--=== Content Part ===-->    
<div class="container">

	<form method="POST" action="login.php" id="form1">
		<input type="hidden" name="action" value="Llogin">
	
    <!--Reg Block-->
    <div class="reg-block">
        <div class="reg-block-header">
            <h2>Connexion</h2>
            <ul class="social-icons text-center">
                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="www.facebook.com"></a></li>
                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="www.google.com"></a></li>
            </ul>
            <p>Pas de compte  ? <a class="color-green" href="registration.php">inscription </a> gratuite ici.</p>            
        </div>

        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control"  id="Lmail" name="Lmail" placeholder="Adresse e-mail">
			<label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelEmail"></label>
        </div>
        <div class="input-group margin-bottom-20">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" class="form-control" id="Lpassword" name="Lpassword" placeholder="Mot de passe">
			<label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelPassword"></label>			
        </div>
		
	<?php 
	if(isset($_POST['Lmail'])){
     $alr=new alert;
	 //recuperer les information remplit par le client
		
		$email=$_POST['Lmail'];
		$passwd=md5($_POST['Lpassword']);
	    $requete=$db->select('client_id FROM client','where client_email = :email and client_passwd = :passwd' ) ;
		 // $requete=$db->prepare("SELECT client_id FROM client WHERE client_email = :email and client_passwd = :passwd");
		 // $requete->execute(array('client_email' => $email,
		 // 'client_passwd' => $passwd));
          $count = count($requete);
		if($count==1){
		  $_SESSION['passwd']=$passwd;        
		  echo '<script language="Javascript">document.location.replace("adm_client/index.php");</script>';
		}else 
		echo $alr->alerte('vous êtes pas inscrit ou votre eamil/mot de passe sont pas correct ', 'warning', true, 'erreur ');	
	}	
	?>
		
		
        <hr>
		<!--
        <div class="checkbox">
            <label>
                <input name="Lcheckbox" type="checkbox"> 
                <p>Restez connecté</p>
            </label>            
        </div>
            -->                    
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
			   <input rel="grow-rotate"  id="Ubutton"  type="button" name="Ubutton"  class="btn-u  btn-block grow-rotate" value="Connexion" /> 
            </div>
        </div>
    </div>
	</form>
	
	
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->
<!-- JS Global Compulsory -->
           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>

<script type="text/javascript" src="assets/js/forms/login.js"></script>
<script type="text/javascript">
    $.backstretch([
      "assets/img/bg/5.jpg",
      "assets/img/bg/4.jpg",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html> 