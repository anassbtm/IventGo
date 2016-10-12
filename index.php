<?php
session_Start();
if($_SESSION['id'] <> "ok")
		echo '<script language="Javascript">document.location.replace("coming.php");</script>';

$titre_page = "Organise ton evenement";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Iventgo | Organise votre événement</title>

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
    <link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
	
    <link rel="stylesheet" href="assets/plugins/ladda-buttons/css/custom-lada-btn.css">
    <link rel="stylesheet" href="assets/css/plugins/hover-effect/css/custom-hover-effects.css">    
		 <link rel="stylesheet" href="assets/css/autosuggest.css">
    <!--[if lt IE 9]><link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/css/theme-colors/default.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
	<style>
	input:-moz-placeholder, textarea:-moz-placeholder {
	    color: red;
	}
	</style>
</head> 

<body>
<div class="wrapper">    
    <!--=== Header v3 ===-->    
    <div class="header">
        <div class="topbar">
            <div class="container">
                <!-- Topbar Navigation -->
                <ul class="loginbar pull-right">
                    <li>
                        <i class="fa fa-globe"></i>
                        <a>Langues</a>
                        <ul class="languages">
                            <li class="active">
                                <a href="#">Fraçais <i class="fa fa-check"></i></a> 
                            </li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>   
                    <li><a href="registration.php">inscription</a></li>  
                    <li class="topbar-devider"></li>   
                    <li><a href="login.php">connexion</a></li>   
                </ul>
                <!-- End Topbar Navigation -->
            </div>
        </div>
		
        <!-- Navbar -->
        <div class="navbar navbar-default mega-menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                         <img  id="logo-header" style="height:35px;" src="/img/logo.png" alt="Logo">
                    </a>
                </div>
				


                <div class="collapse navbar-collapse navbar-responsive-collapse">
                   <ul class="nav navbar-nav">
					   
					   <li>
						   <a href="partner.php">Publiez une annonce</a>
					   </li>
					   
					   
                      <li class="dropdown">
                          <a href="javascript:void(0);">Aide</a>
                          <ul class="dropdown-menu">
                              <li><a href="help.php">La F.A.Q</a></li>
                              <li><a href="work.php">Mode d'emploi</a></li>
							  <li><a href="rules.php">Les rêgles</a></li>
                          </ul>                                
                      </li>	

                    </ul>
                </div><!--/navbar-collapse-->

            </div>    
        </div>
        <!-- End Navbar -->
    </div>
    <!--=== End Header v3 ===-->    

    <!--=== Slider ===-->
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- SLIDE -->
                <li class="revolution-mch-3" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                    <!-- MAIN IMAGE -->
                    <img src="assets/img/bg/a5.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption re-title-v2 sft start"
                        data-x="center"
                        data-hoffset="0"
                        data-y="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endeasing="Power1.easeIn"                        
                        data-endspeed="300">
                        Ivent<span style="color:RGB(127,204,50);">go</span> organise votre événement
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption re-text-v1 sft"
                        data-x="center"
                        data-hoffset="0"
                        data-y="200"
                        data-speed="1400"
                        data-start="2000"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
						Mariage, Anniversaire, Groupe d'enfants, Séminiare, etc...
                          <br>
                        Nous trouvons toutes les meilleurs activités prés de chez vous !
                        
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption"
                        data-x="center"
                        data-hoffset="0"
                        data-y="320"
                        data-speed="1600"
                        data-start="2800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
	                    <form id="form-search"  action="result.php" method="POST" class="form-inline" role="form">
	                       
	 						<label class="input">
	                            	<input name="search-ville-index-nom" id="param" autocomplete="off"  size="30" type="text" class="input-lg form-control"  placeholder="Entrez un lieu" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';" style="margin-top:-5px;">
	 						<input name="search-ville-index-id" id="param-id" type="hidden">
						</label>
	                        <button type="submit" class="btn-u btn-u-lg grow-rotate" style="padding:13px;">Rechercher</button>
	                    </form>
                    </div>
                </li>
                <!-- END SLIDE -->

                
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>            
        </div>
    </div>
    <!--=== End Slider ===-->

    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">PLANIFIEZ SON EVENEMENT</h2>
		</div>	
            <p class="space-lg-hor">La recette d'un &eacute;v&eacute;nement r&eacute;ussi et bien organiser ,nous la connaissons et nous comptons la partager avec vous,pour faire de votre &eacute;v&eacute;nement un instant &eacute;ternel</p>

        <div class="row content-boxes-v4">
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left fa fa-map-marker"></i>
                <div class="content-boxes-in-v4">
                    <h2>Rechechez</h2>
                    <p>Entrez votre code postal et le type de votre &eacute;v&eacute;nement et vous aurez un large choix de prestataires qualifi&eacute;s,certifi&eacute;s et pr&eacute;s de chez vous.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left fa fa-calendar"></i>
                <div class="content-boxes-in-v4">
                    <h2>R&eacute;servez</h2>
                    <p>R&eacute;servez votre prestataire choisi en fonction de votre date d'&eacute;v&eacute;nement et de ses disponibilit&eacute;s.</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <i class="pull-left fa fa-smile-o"></i>
                <div class="content-boxes-in-v4">
                    <h2>Profitez</h2>
                    <p>Tout ce qu'il vous reste &agrave; faire c'est de profiter et de faire profiter vos invit&eacute;s d'un &eacute;v&eacute;nements qu'on sera pas pr&ecirc;t d'oublier</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-grey content-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="responsive-video margin-bottom-30">
                        <iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="title-v2">WE ARE UNIFY AGENCY</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p><br>
                    <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Savoir plus</a>
                    <a href="#" class="btn-u">Achetez maintenant</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center">L'ACTUALITE</h2>
            <p class="space-lg-hor">If you are going to use a passage of Lorem Ipsum, <span class="color-green">you need to</span> be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <span class="color-green">generator</span> on the Internet.</p>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnails-v1">
                    <div class="thumbnail-img">
                        <img class="img-responsive" src="assets/img/masonry/blog2.jpg" alt="">                            
                    </div>
                    <div class="caption">
                        <h3><a href="#">Business Opportunities</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metsit us. Fusce dapibus, justo sit amet risus etiam portapsum generators on the Internet tend to repeat predefined.</p>
                        <p><a class="read-more" href="#">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnails-v1">
                    <div class="thumbnail-img">
                        <img class="img-responsive" src="assets/img/masonry/blog3.jpg" alt="">                            
                    </div>
                    <div class="caption">
                        <h3><a href="#">Engage Customers With Unify</a></h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text, all the  ipsum generators.</p>
                        <p><a class="read-more" href="#">See More</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnails-v1">
                    <div class="thumbnail-img">
                        <img class="img-responsive" src="assets/img/masonry/blog4.jpg" alt="">                            
                    </div>
                    <div class="caption">
                        <h3><a href="#">Empower People, HCM</a></h3>
                        <p>Donec id elit non mi porta gravida at eget metsit us. Fusce dapibus, justo sit amet risus etiam portapsum generators on the Internet tend to repeat predefined.</p>
                        <p><a class="read-more" href="#">See More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-counter-v1 parallaxBg">
        <div class="container">
            <h2 class="title-v2 title-light title-center">UNE ANGENCE NATIONALE</h2>
            <p class="space-xlg-hor text-center color-light">le concept iventgo gere une base de données nationale et vous permet de comparer les prix a travers toutes les régions ! nos certifications vous garntissent une prestation réussie.</p>

            <div class="margin-bottom-40"></div>

            <div class="row margin-bottom-10">
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">4232</span>   
                        <h4>Utilisateurs</h4>
                    </div>    
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">277</span> 
                        <h4>Animations</h4>
                    </div>    
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">7842</span>
                        <h4>Réservations</h4>
                    </div>    
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="counters">
                        <span class="counter">109</span>
                        <h4>Certifications</h4>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <div class="container content-sm">
        <div class="row">
            <div class="col-sm-6 content-boxes-v3 content-boxes-v3-right sm-margin-bottom-30">
                <div class="margin-bottom-30">
                    <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm">Une recherche simple</h2>
                        <p>Vous ne connaîtrez jamais une recherche aussi simple avec un résultat époustouflant</p>
                    </div>
                </div>
                <div class="clearfix margin-bottom-30">
                    <i class="icon-custom icon-md rounded-x icon-bg-darker icon-line icon-directions"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm">Des partenaires fiables</h2>
                        <p>Nous avons sélectionné les meilleurs partenaires,et notre réussite réside dans leurs confiance.</p>
                    </div>
                </div>
                <div class="clearfix">
                    <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm">Une approche differente</h2>
                        <p>Un nouveau concept qui rendra l'organisation de votre événement un vrai jeu d'enfant</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 content-boxes-v3">
                <div class="clearfix margin-bottom-30">
                    <i class="icon-custom icon-md rounded-x icon-bg-darker icon-line icon-trophy"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm">Une garantie de sécurité</h2>
                        <p>Votre sécurité est une de nos préoccupations et notre équipe vous garantie une sécurité en ligne lors de vos payements,mais,aussi personnelle,le jour de votre événement.</p>
                    </div>
                </div>
                <div class="clearfix margin-bottom-30">
                    <i class="icon-custom icon-md rounded-x icon-bg-u icon-line icon-directions"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm">Une comparaison nationale</h2>
                        <p>Une nouvelle vision de l'événement au niveau national</p>
                    </div>
                </div>
                <div class="clearfix">
                    <i class="icon-custom icon-md rounded-x icon-bg-darker icon-line icon-directions"></i>
                    <div class="content-boxes-in-v3">
                        <h2 class="heading-sm"></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="list-unstyled row portfolio-box-v1">
        <li class="col-md-3 col-sm-6">
            <img class="img-responsive" src="assets/img/mockup/img1.jpg" alt="">
            <div class="portfolio-box-v1-in">
                <h3>Collective Package</h3>
                <p>Web Design, Mock-up</p>
                <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
            </div>
        </li>
        <li class="col-md-3 col-sm-6">
            <img class="img-responsive" src="assets/img/mockup/img2.jpg" alt="">
            <div class="portfolio-box-v1-in">
                <h3>Ahola Company</h3>
                <p>Brand Design, UI</p>
                <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
            </div>
        </li>
        <li class="col-md-3 col-sm-6">
            <img class="img-responsive" src="assets/img/mockup/img4.jpg" alt="">
            <div class="portfolio-box-v1-in">
                <h3>Allan Project</h3>
                <p>Web Development, HTML5</p>
                <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
            </div>
        </li>
        <li class="col-md-3 col-sm-6">
            <img class="img-responsive" src="assets/img/mockup/img2.jpg" alt="">
            <div class="portfolio-box-v1-in">
                <h3>Ahola Company</h3>
                <p>Brand Design, UI</p>
                <a class="btn-u btn-u-sm btn-brd btn-brd-hover btn-u-light" href="#">Read More</a>
            </div>
        </li>
    </ul>

    <div class="bg-grey content-sm">    
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title-v2">NOTRE LABEL CERTIFICATION</h2>
                    <p>Nous attribuons un label de certification &agrave; nos prestataires qui t&eacute;moignent d'une exp&eacute;rience remarquable dans le domaine de l'&eacute;v&eacute;nementiel.</p>
                    <p>Notre seule priorit&eacute; est de satisfaire vos attentes,en vous garantissant les meilleures prestations avec des prestataires certifi&eacute;s par notre &eacute;quipe d'experts.</p><br>
                    <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark">Read More</a>
                    <a href="#" class="btn-u">Purchase Now</a>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="assets/img/mockup/mockup1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container team-v1 content-sm">
        <div class="margin-bottom-40 text-center">
            <h2 class="title-v2 title-center">QUELQUES EXEMPLES DANS VOTRE SECTEUR</h2>
            <p>We <strong>meet</strong>Nos prestataires ne sont pas choisis au hasard et ils t&eacute;moignent d'une exp&eacute;rience consid&eacute;rable</p><br> 
            <p>Nous mettons &agrave; votre disposition quelques exemples pour vous rassurer et faciliter votre choix</p>
        </div>

        <ul class="list-unstyled row">
            <li class="col-sm-3 col-xs-6 md-margin-bottom-30">
                <div class="team-img">
                    <img class="img-responsive" src="assets/img/team/img1-md.jpg" alt="">
                    <ul>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <h3>John Brown</h3>
                <h4>/ Technical Director</h4>
                <p>Technical Director mi porta gravida at eget metus id elit mi egetine...</p>
            </li>
            <li class="col-sm-3 col-xs-6 md-margin-bottom-30">
                <div class="team-img">
                    <img class="img-responsive" src="assets/img/team/img2-md.jpg" alt="">
                    <ul>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <h3>Tina Krueger</h3>
                <h4>/ Lead Designer</h4>
                <p>Lead Designer mi porta gravida at eget metus id elit mi egetine...</p>
            </li>
            <li class="col-sm-3 col-xs-6">
                <div class="team-img">
                    <img class="img-responsive" src="assets/img/team/img3-md.jpg" alt="">
                    <ul>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <h3>David Case</h3>
                <h4>/ Web Developer</h4>
                <p>Web Developer in Unify agency porta gravida at eget metus id elit...</p>
            </li>
            <li class="col-sm-3 col-xs-6">
                <div class="team-img">
                    <img class="img-responsive" src="assets/img/team/img5-md.jpg" alt="">
                    <ul>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-custom icon-sm rounded-x fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <h3>Kathy Reyes</h3>
                <h4>/ Creative Designer</h4>
                <p>Former Designer in Twitter non mi porta gravida at elit mi egetine...</p>
            </li>
        </ul>                
    </div>

    <div class="bg-grey content-sm">
        <div class="container text-center">
            <h2 class="title-v2 title-center">VOUS VOULEZ PUBLIER UNE ANNONCE ?</h2>
            <p class="space-lg-hor">N'attendez plus pour cr&eacute;er votre compte.Que vous soyez utilisateur ou prestataires,nous mettons &agrave; votre disposition divers service qui n'ont qu'un seul but : Vous facilitez la vie. L'inscription est gratuite et se fait en quelques minutes.</p><br>
            <a href="help.php" class="btn-u btn-brd btn-brd-hover btn-u-dark">En savoir plus</a>
            <a href="partner.php" class="btn-u">Publiez une annonce</a>
        </div>
    </div>
    <!--=== Footer Version 1 ===-->
	<?php
	include_once("inc/footer.php");
	?>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/plugins/revolution-slider.js"></script>



<script type="text/javascript" src="assets/js/plugins/jquery-ui-1.10.3.min.js"></script>


<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();        
        RevolutionSlider.initRSfullScreenOffset();
		
		
		$("#param").autocomplete({
				source : "autosuggest.php",
				dataType: 'json',
				position: {
			        my: "right top",
			        at: "right bottom"
			    },
				focus: function( event, ui ) {
					event.preventDefault();
				        $( "#param" ).val( ui.item.label );
				        $( "#param-id" ).val( ui.item.id );
				      },
				  	  
				data : {
							maxRows : 12
				},
				select: function(event, ui) {
					event.preventDefault();
					//$(this).val(ui.item.label+", "+ui.item.label2+", France");
					$(this).val(ui.item.label+", "+ui.item.label2+", France");
					$("#id").val(ui.item.value);
					$('#param-id').val(ui.item.id);
				}
			
			
		}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		      return $( "<li class='involved'>" )
			
		        //.append( "<a><b>" + item.label + "</b>, " + item.label2 + ", France</a>" )
		        .append( "<a><b>" + item.label + "</b>, " + item.label2 + ", France</a>" )
		        .appendTo( ul );
		    };
	
	
	
		
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html> 