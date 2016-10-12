<?php
include_once("inc/init.php");
$titre_page = "Partner";
include_once("inc/header.php");
include_once("inc/menu.php");
?>

<div class="wrapper" style="background:#fff;">
    <div id="layerslider" style="width: 100%; height: 400px; margin: 0px auto;">

        <!--Third Slide-->
        <div class="ls-slide" style="slidedirection: right; transition2d: 92,93,105; ">
            <img src="assets/img/sliders/2.jpg" class="ls-bg" alt="Slide background">

            <span class="ls-s-1" style=" color: #000; line-height:45px; font-weight: 200; font-size: 35px; top:100px; left: 50px; slidedirection : top; slideoutdirection : bottom; durationin : 1000; durationout : 1000; ">
               <b> Augmenter vos revenus avec    <br> Iventgo </b>
            </span>

            <a class="btn btn-u btn-lg ls-s-1" href="#form" style=" padding: 9px 20px; font-size:25px; top:220px; left: 50px; slidedirection : bottom; slideoutdirection : bottom; durationin : 2000; durationout : 2000; ">
                Inscrivez votre structure dès maintenant
            </a> <br>
			<a href="#">Devenir partenaire</a>

        </div>
        <!--End Third Slide-->
    </div>

    <!--=== Content Part ===-->	
    <div class="container content" >
    	<div class="row" >            
        	<div class="col-md-9">
            	<div class="headline"><h2 style=" color: #000; line-height:45px; font-weight: 200; font-size: 35px; top:100px; left: 50px; slidedirection : top; slideoutdirection : bottom; durationin : 1000; durationout : 1000; ">
		<b>Pourquoi choisir Iventgo ?</b></h2></div>

                <!-- Clients Block-->
                <div class="container content">		
					<!-- Service Blcoks -->
					<div class="row margin-bottom-10">
						<div class="col-md-3 col-sm-6" >
							<div class="service-block service-block-u" style="height:300px;">             
								<i class="icon-4x color-light icon-line icon-globe"></i>
								<h2 class="heading-md">Une portée internationale</h2><br>
								<p align=left>Nous promouvons votre structure auprès de nombreux clients à travers le monde, tout au long de l’année.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 ">
							<div class="service-block service-block-red" style="height:300px;">
								<i class="icon-4x color-light icon-line icon-badge"></i>
								<h2 class="heading-md">Une inscription gratuite</h2><br>
								<p align=left>Il n'y a absolument aucun frais d'inscription pour devenir notre partenaire.<br></p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-block service-block-dark" style="height:300px;">
								<i class="icon-4x color-light fa fa-bell-o"></i>
								<h2 class="heading-md">Une assistance multilingue 24h/24</h2><br>
								<p align=left>Notre équipe d'assistance est disponible 24h/24 et 7j/7 en cas de besoin pour répondre à vos questions et à celles de vos clients dans plus de 40 langues.</p>                        
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="service-block service-block-blue" style="height:300px;">
								<i class="icon-4x color-light icon-line icon-credit-card"></i>
								<h2 class="heading-md">Un modèle de facturation</h2><br>
								<p align=left>Vous ne payez aucune commission sur les réservations de clients même ceux ayant commander votre produit.</p>                        
							</div>
						</div>
					</div><!-- End Service Blcoks -->					
				</div><!-- End Clients Block-->
			</div><!--/col-md-9-->
		</div>
      

	</div><!--=== End Content Part  ===-->
    
	<!--=== Content Part 2 ===-->	
	<div style="background:RGB(247,247,247);" >
		<div class="container content" >	
			<div class="headline"><h2 style=" color: #000; line-height:45px; font-weight: 200; font-size: 35px; top:100px; left: 50px; slidedirection : top; slideoutdirection : bottom; durationin : 1000; durationout : 1000; ">
			<b>Mode d'emploi</b></h2>
			</div>
			<div class="row team margin-bottom-20" >
				<div class="col-sm-4">                    
					<div class="thumbnail-style">                 
						<h3><a>Vous nous présentez votre strucutre</a></h3>
						<p>Pour vous inscrire, indiquez les informations de votre structure, vos conditions de paiement et ajoutez des photos.
						Une fois que nous aurons confirmé ces renseignements, vous pourrez mettre en ligne votre structure et recevoir immédiatement des réservations.</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail-style">                    
						<h3><a>Nous le faisons connaître dans le monde entier</a></h3>
						<p>Nous promouvons votre structure de manière à attirer les clients du monde entier. Nous le mettons également en avant
						sur les moteurs de recherche tels que Google, Bing et Yahoo pour vous aider à vendre plus d'hébergements et à augmenter vos revenus !</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnail-style">                  
						<h3><a>Vous recevez immédiatement des réservations</a></h3>
						<p>Toutes les réservations faites sur iventgo.net sont immédiatement confirmées. Les clients iventgo.net laissent des commentaires sur leur séjour
						qui pourront convaincre d'autres utilisateurs de séjourner chez vous.</p>
					</div>
				</div>           
			</div>
		</div>

	</div><!--===  End Content Part 2===-->	
	
	<!--=== Formulaire===-->	
	<div style="background:#fff;">
		<div class="container content" id="form">	
			<div class="headline"><center><h3 style=" color: #000; line-height:45px; font-weight: 200; font-size: 35px; top:100px; left: 50px; slidedirection : top; slideoutdirection : bottom; durationin : 1000; durationout : 1000; ">
			<b>Inscrivez votre structure dès maintenant</b></h3></center>
			</div>			
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" >				
					<form  method="POST" action="partner_form.php" id="form1" class="reg-page" style="background:RGB(247,247,247);">
					
						<?php 
							if(isset($_POST['Uname'])){																				   								 
							  echo '<script language="Javascript">document.location.replace("partner_form.php");</script>';
							}	
						?>
		
						<label class="font-md">Nom de la structure</label>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control input-lg" autocomplete="off"  id="Unamestr" name="Unamestr">
			                <label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelNomstr"></label>

						</div>
					   <br>
					   
						<label>Nom</label>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control input-lg" autocomplete="off"  id="Uname" name="Uname">
			                <label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelNom"></label>

						</div>
						<br>
						
						<label>Votre adresse e-mail <span class="color-red">*</span></label>
						<div class="input-group margin-bottom-20">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control input-lg"  autocomplete="off" id="Umail"  name="Umail">
							<label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelEmail"></label>

						</div>
						<br>
						<div class="row">						   
							<div class="col-md-10 col-md-offset-1">
								<input rel="grow-rotate"  id="Ubutton"  type="button" name="Ubutton"  class="btn-u btn-block btn-u-lg" value="Commencer" /> 				
							</div>
						</div>
					</form>
								
				</div>
			</div>	
		</div>
	</div><!--=== Fin Formulaire===-->	
  
 <?php
include_once("inc/footer.php");
?> 
</div>  <!--=== End wraper fin de la page ===-->

<?php
include_once("inc/script.php");
?>

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>

<script type="text/javascript" src="assets/plugins/countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>



<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/layerslider.transitions.js"></script>
<script type="text/javascript" src="assets/plugins/layer-slider/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="assets/js/plugins/layer-slider.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-recent-works.js"></script>
<script type="text/javascript" src="assets/js/plugins/jquery-ui-1.10.3.min.js"></script>


<script type="text/javascript" src="assets/js/forms/partner.js"></script>

<script type="text/javascript">
$.backstretch([
  "assets/img/bg/5.jpg",
  "assets/img/bg/4.jpg",
  ], {
    fade: 1000,
    duration: 7000
});		
</script>

<script type="text/javascript">	
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        LayerSlider.initLayerSlider();   
        OwlRecentWorks.initOwlRecentWorksV2();
		Datepicker.initDatepicker();
    });
</script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html> 