<?php
include_once("inc/init.php");
$titre_page = "Contact";
include_once("inc/header.php");
include_once("inc/menu.php");
?>

<div class="wrapper">
   <div class="container content">     
       <div class="row margin-bottom-10">
           <div class="col-md-9 mb-margin-bottom-30">
               <!-- Google Map -->
               <div id="map" class="map map-box map-box-space margin-bottom-40"></div>
               <!-- End Google Map -->

               <p>Vous avez besoin d'aide? Notre équipe peut vous aider,il suffit de remplir ce formulaire.</p><br />
			<form method="POST" action="contact.php" id="form1"> 

				<?php 
							if(isset($_POST['Uname'])){					
							}	
							?>
                   <label>Nom</label>
                   <div class="row margin-bottom-20">
                       <div class="col-md-7 col-md-offset-0">
                          <input type="text" class="form-control" autocomplete="off"  id="Uname" name="Uname">
							<label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelNom"></label>
                       </div>                
                   </div>
                   
                   <label>Email <span class="color-red">*</span></label>
                   <div class="row margin-bottom-20">
                       <div class="col-md-7 col-md-offset-0">
						   <input type="text" class="form-control"  autocomplete="off" id="Umail" name="Umail">
							<label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelEmail"></label>
                       </div>                
                   </div>
                   
                   <label>Message</label>
                   <div class="row margin-bottom-20">
                       <div class="col-md-11 col-md-offset-0">
                           <textarea rows="8" class="form-control" id="UMessage" name="UMessage"></textarea>
						   <label style="padding:5px;font-size:10px;position:absolute;top:-25px;right:0px;" id="LabelMessage"></label>
                       </div>                
                   </div>
                   	<input rel="grow-rotate"  id="Ubutton"  type="button" name="Ubutton"  class="btn-u" value="Envoyer le message" /> 				
               </form>
           </div><!--/col-md-9-->
           
           <div class="col-md-3">
               <!-- Contacts -->
               <div class="headline"><h2>Contacts</h2></div>
               <ul class="list-unstyled who margin-bottom-30">
                   <li><a href="#"><i class="fa fa-home"></i>160 rue de Periselle,COUTICHES-59310 DOUAI</a></li>
                   <li><a href="#"><i class="fa fa-envelope"></i>contact@iventgo.fr</a></li>
                   <li><a href="#"><i class="fa fa-phone"></i>(+33)6-89-77-69-03</a></li>
                   <li><a href="#"><i class="fa fa-globe"></i>http://www.iventGo.fr</a></li>
               </ul>

               <!-- Business Hours -->
               <div class="headline"><h2>Horaires</h2></div>
               <ul class="list-unstyled margin-bottom-30">
                   <li><strong>Lundi-vendredi:</strong> 9h à 18h</li><br/>                    
                   <li><strong>Samedi:</strong>De 9h à 12h </li>
                   <li><strong>Dimanche:</strong> Fermé </li>
               </ul>

               <!-- Why we are? -->
               <div class="headline"><h2>Que pouvons nous faire vous?</h2></div>
               <ul class="list-unstyled">
                   <li><i class="fa fa-check color-green"></i>Vous aider pour l'utilisation du site</li>
                   <li><i class="fa fa-check color-green"></i>Régler un problème technique</li>
                   <li><i class="fa fa-check color-green"></i>Répondre à toutes vos questions</li>
               </ul>
           </div><!--/col-md-3-->
       </div><!--/row-->        

       <!-- Our Clients -->
      
       <!-- End Our Clients -->
   </div><!--/container-->
<?php
include_once("inc/footer.php");
?>
</div>
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>

<?php
include_once("inc/script.php");
?>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>
<script type="text/javascript" src="assets/js/forms/contact.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>

<script type="text/javascript" src="assets/js/pages/page_contacts.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();                
        ContactPage.initMap();              
    });
</script>


</body>
</html> 