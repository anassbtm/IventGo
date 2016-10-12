<?php
include_once("inc/init.php");
$titre_page = "Devis";
include_once("inc/header.php");
include_once("inc/menu.php");
?>
<div class="wrapper">
<div class="margin-bottom-50"></div>  
		<div class="row"> 	
			<div class="col-md-10 col-md-offset-1">	
				<!--Table Bordered-->
                <div class="panel panel-grey margin-bottom-40">
				
					<div class="row content-boxes-v3 margin-bottom-30 col-md-10 col-md-offset-1">
						<div class="col-md-6 md-margin-bottom-32">                
							<h2 class="heading-sm">
								<img style="height:42px;" id="logo-header" src="/img/logo.png" alt="Logo">
							</h2>
							<p>160 rue de Periselle<br>COUTICHES-59310 DOUAI <br> contact@iventgo.fr <br>http://www.iventGo.fr<br>06-89-77-69-03 </p>
						</div>
						<div class="col-md-4 md-margin-bottom-30">
							<div class="margin-bottom-50"></div>  
							<button class="btn btn-block btn-android-inversed rounded bg-color-green">
							<h3>DEVIS</h3>
							</button>
						</div>
					</div>
					
					<div class="row content-boxes-v3 margin-bottom-30 col-md-10 col-md-offset-1">
						<div class="col-md-6 md-margin-bottom-32">                
							<p>Reference: <br>Date: <br> N Clent: </p>
						</div>
						<div class="col-md-4 md-margin-bottom-30">
							<p>Reference <br>Date: <br> N prestataire: </p>
						</div>
					</div>
					<div class="margin-bottom-50"></div>
					<?php
					    $requete=$db->select('produit where produit_id=1') ;
						foreach($requete as $ligne){
						
					?>
					<div class="col-md-10 col-md-offset-0">
					<?php echo 'Intitulé :'.$ligne['produit_description'];?>
					</div>
					
					<!--Table de devis-->
                    <div class="panel-body">
					
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Quentité</th>
                                    <th>Désignation</th>
                                    <th>Prix Personne HT</th>
                                    <th>Prix Total HT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $ligne['produit_quantite'];?></td>                                   
                                    <td><?php echo $ligne['produit_devis_texte'];?></td>
                                    <td><?php echo $ligne['produit_prix_personne'];?></td>
									<td><?php echo $ligne['produit_prix_total'];?></td>
                                </tr>    							
                            </tbody>
                        </table>
						<br>
						<div class="col-md-3 col-md-offset-9">
							<table class="table table-bordered">
								<tbody>
								<tr>
									<td>Total  Hors Taxe</td>
									<td><?php echo $ligne['produit_prix_total'];?></td>
								</tr>
								<tr>
									<td>TVA</td>
									<td><?php echo $ligne['produit_tva'];?></td>
								</tr>
								<tr>
									<td><b>Total TTC en euro</b></td>
									<td><?php echo $ligne['produit_tva'] * $ligne['produit_prix_total'].' ';?></td>
								</tr>
								</tbody>
							</table>
						<?php
						}						
						?>																							

						</div>
						<div class="col-md-9">
							<p>Nous restons à votre disposition pour toute information complémentaire.<br>Cordialement, </p>
							<p>Si ce devis vous convient, veuillez nous le retourner signé précédé de la mention :"BON POUR ACCORD ET EXECUTION DU DEVIS"<br> <p>
							<div class="col-md-7 md-margin-bottom-32">                
							<p>Date : </p>
							</div>
							<div class="col-md-5 md-margin-bottom-32">                
							<p>Signature : </p>
							</div>
						</div>  						
                    </div> 	
					<!--End Table de devis-->
                </div>
                <!--End Table Bordered-->
				
				
				<div class="row brand- margin-bottom-40">
					  <div class="col-sm-6 col-md-3">
						<button class="btn btn-block bg-color-green" id="impression" name="impression" type="button" onclick="imprimer_page()" >
						  <i class="fa fa-print"></i> Imprimer
						 
						</button>
					  </div>
				</div>	
			</div>
		</div>
<?php
include_once("inc/footer.php");
?>
</div>

<?php
include_once("inc/script.php");
?>
<script type="text/javascript">function imprimer_page(){  window.print();}</script>


<script type="text/javascript">
	jQuery(document).ready(function() {
	
    });
</script>
</body>
</html> 