<head>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS Page Style -->    
    <link rel="stylesheet" href="assets/css/pages/page_error4_404.css">    
</head> 


<?php
include_once("inc/init.php");
$titre_page = "404";
include_once("inc/header.php");

?>
<body>

    <!--=== Error V4 ===-->    
    <div class="container content">
        <!--Error Block-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-v4">
                  <img style="height:35px;" id="logo-header" src="/img/logo.png" alt="Logo">
                    <h1>404</h1>
                    <span class="sorry"> Désolé, la page que vous recherchez n'a pu être trouvée!</span>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <a class="btn-u btn-brd btn-u-light" onclick="window.history.back();"> Retour vers la page principale</a>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </div><!--/container-->
    <!--End Error Block-->

    <!--=== Sticky Footer ===-->
    <div class="container sticky-footer">
        <p class="copyright-space">
            2015 &copy; Tous droits réservés.<a href="mentions.php">Mentions Légales</a> | <a href="terms.php">Conditions générales et confidentialité</a> 
        </p>  
    </div>
    <!--=== End Sticky Footer ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
<script type="text/javascript">
    $.backstretch([
      "assets/img/blur/img2.jpg"
      ])
</script>
<!-- JS Customization -->
<script type="text/javascript" src="assets/js/custom.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();      
    });
</script>
<!--[if lt IE 9]>
    <script src="assets/plugins/respond.js"></script>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/js/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
