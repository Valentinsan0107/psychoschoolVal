<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		if (isset($TITLEpage)) {
			echo "<title>".$TITLEpage."</title>";
		}else{
			echo "<title>PsychoSchool</title>";
		}
		if (isset($descriptionpage)) {
			echo '
      <meta name="description" content="'.$descriptionpage.'">';
		}else{
			echo '
      <meta name="description" content="Je parle du contenu de la page">';
		}
		if (isset($motclefspage)) {
			echo '
      <meta name="keywords" content="'.$motclefspage.'">';
		}else{
			echo '
      <meta name="keywords" content="parle,contenu,page">';
		}
	?>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="img/lightbulb.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 	
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     

    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.whoareyou').classList.replace("whoareyou", "whoareyou-2");
}, false);
    </script>

    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.whoareyou-3').classList.replace("whoareyou-3", "whoareyou-4");
}, false);
    </script>

    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.form-formulaire-contact-2').classList.replace("form-formulaire-contact-2", "form-formulaire-contact-3");
}, false);
    </script>

    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.conteneur-avis-conseils').classList.replace("conteneur-avis-conseils", "conteneur-avis-conseils-2");
}, false);
    </script>


    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function mafonction() {
    document.querySelector('.conteneur-général-3').classList.replace("conteneur-général-3", "conteneur-général-2");
}, false);
    </script>

    <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function mafonction() {
    document.querySelector('.menu-matériel').classList.replace("menu-matériel", "menu-matériel-2");
}, false);
    </script>

<script type="text/javascript">
 
jQuery(document).ready(function(){

$('.test-loader-2').show(0).delay(1000).fadeOut(200);
});
</script>

</head>
<body>
  
<div id="test-widget-cookie"> 
    <p class="texte-test-widget-cookie" href="#">En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des publicités adaptées à vos centres d'intêrets.</p>
    <button class="input-widget-cookie" onclick='closecookie()'>&times;</button>
</div>


<div class="test-loader-2"><div class="contener_general"> <div class="contener_mixte"><div class="ballcolor ball_1">&nbsp;</div></div> <div class="contener_mixte"><div class="ballcolor ball_2">&nbsp;</div></div> <div class="contener_mixte"><div class="ballcolor ball_3">&nbsp;</div></div> <div class="contener_mixte"><div class="ballcolor ball_4">&nbsp;</div></div> </div></div>


<style type="text/css">.contener_general{-webkit-animation:animball_two 1s infinite;-moz-animation:animball_two 1s infinite;-ms-animation:animball_two 1s infinite;animation:animball_two 1s infinite;width:44px;height:44px} .contener_mixte{width:44px;height:44px;} .ballcolor{width:20px;height:20px;border-radius:50%} .ball_1, .ball_2, .ball_3, .ball_4{position:absolute;-webkit-animation:animball_one 1s infinite ease;-moz-animation:animball_one 1s infinite ease;-ms-animation:animball_one 1s infinite ease;animation:animball_one 1s infinite ease} .ball_1{background-color:#C4302B;top:0;left:0} .ball_2{background-color:#363636;top:0;left:24px} .ball_3{background-color:#363636;top:24px;left:0} .ball_4{background-color:#EB3A34;top:24px;left:24px} @-webkit-keyframes animball_one{0%{position:absolute} 50%{top:12px;left:12px;position:absolute;opacity:0.5} 100%{position:absolute}} @-moz-keyframes animball_one{0%{position:absolute} 50%{top:12px;left:12px;position:absolute;opacity:0.5} 100%{position:absolute}} @-ms-keyframes animball_one{0%{position:absolute} 50%{top:12px;left:12px;position:absolute;opacity:0.5} 100%{position:absolute}} @keyframes animball_one{0%{position:absolute} 50%{top:12px;left:12px;position:absolute;opacity:0.5} 100%{position:absolute}} @-webkit-keyframes animball_two{0%{-webkit-transform:rotate(0deg) scale(1)} 50%{-webkit-transform:rotate(360deg) scale(1.2)} 100%{-webkit-transform:rotate(720deg) scale(1)}} @-moz-keyframes animball_two{0%{-moz-transform:rotate(0deg) scale(1)} 50%{-moz-transform:rotate(360deg) scale(1.3)} 100%{-moz-transform:rotate(720deg) scale(1)}} @-ms-keyframes animball_two{0%{-ms-transform:rotate(0deg) scale(1)} 50%{-ms-transform:rotate(360deg) scale(1.3)} 100%{-ms-transform:rotate(720deg) scale(1)}}</style>



      <nav>

                        <div class="menu-icon">
                              <div>
                              <img class="image-logo-2" src="img/logo-youtube-test.png" alt="logo">
                              </div>
                              <i class="fa fa-bars fa-2x" onclick="responsive()"></i>
                        </div>

                        

                        <div class="menu">
                              <ul>
                        <div>
                              <a href="index.php"><img class="image-logo" src="img/logo-youtube-test.png" alt="logo"></a>
                        </div>
                        <div id="conteneur-image-search">
                              <img class="image-search" src="img/loupe-barre-recherche.png" onclick="searchbox()" alt="">
                        </div>
                        <div id="conteneur-image-cancel">
                              <img class="image-search" src="img/cancel.png" onclick="closesearchbox()" alt="">
                        </div>
                              <div id="conteneur-bouton">
                                    <div class="conteneur-barre-recherche-2">
                                  <form class="form-recherche" method="GET" action="recherche.php">
                                  <input id="input-recherche-2" minlength="1" type="text" name="recherche" placeholder="Recherche">
                                  <button id="bouton-recherche-2" type="submit" name="submit"><img class="image-search-2" src="img/loupe-barre-recherche.png" alt=""></button>
                                  </form>
                              </div>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="techniques.php">Blog</a></li>
                                    <li><a href="livre.php">Matériel</a></li>
                                    <li><a href="about.php">Contact</a></li>
                                    <?php

			                        	if (!isset($_SESSION['u_id'])) {
			                        		echo '<li><a class="active" href="log-in.php">Sʼenregistrer</a></li>';
			                        	} else {
			                        		echo '<li><a class="active" >'.htmlspecialchars($_SESSION['u_pseudo']).'</a></li>
			                        		<li class="active-2"><form class="form-close" method="POST" action="includes/backrownd/compts/logout.php">
			                        		<input type="hidden" name="submit" value=" ">
			                        		<input class="log" type="image" src="img/power-button-off.png" name="submit"></input></form></li>';
			                        	}
			                        ?>
                              </div>
                        <div class="conteneur-barre-recherche">
                              <form class="form-recherche-2" method="GET" action="recherche.php">
                                  <input id="input-recherche" type="text" minlength="1" name="recherche" placeholder="Recherche">
                                  <button id="bouton-recherche" type="submit" name="submit"><img class="image-search-2" src="img/loupe-barre-recherche.png" alt=""></button>
                              </form>
                        </div>
                              </ul>
                        </div>
                  </nav>



      <script type="text/javascript">
            function searchbox(){
                  document.getElementById("conteneur-bouton").style.display = "none";
                  document.getElementById("input-recherche").style.display = "block";
                  document.getElementById("bouton-recherche").style.display = "block";
                  document.getElementById("conteneur-image-search").style.display = "none";
                  document.getElementById("conteneur-image-cancel").style.display = "block";
            }
      </script>

      <script type="text/javascript">
            function responsive(){
                  document.getElementById("conteneur-bouton").style.display = "block";
                  document.getElementById("input-recherche").style.display = "none";
                  document.getElementById("bouton-recherche").style.display = "none";
                  document.getElementById("conteneur-image-search").style.display = "block";
                  document.getElementById("conteneur-image-cancel").style.display = "none";
            }
            
      </script>



      <script type="text/javascript">
            function closesearchbox(){
                  document.getElementById("conteneur-bouton").style.display = "block";
                  document.getElementById("input-recherche").style.display = "none";
                  document.getElementById("bouton-recherche").style.display = "none";
                  document.getElementById("conteneur-image-search").style.display = "block";
                  document.getElementById("conteneur-image-cancel").style.display = "none";
            }
      </script>

      <script type="text/javascript">
            function closelog(){
                  document.getElementById("conteneur-message-erreur-log").style.display = "none";
            }
      </script>

      <script type="text/javascript">
            function closecookie(){
                  document.getElementById("test-widget-cookie").style.display = "none";
            }
      </script>



      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });




      </script>
