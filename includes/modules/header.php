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
	?>
  <meta name="description" content="Je parle du contenu de la page">
  <meta name="keywords" content="parle,contenu,page">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/psychoschoolVal/img/icon-brain.png">
	<link rel="stylesheet" type="text/css" href="/psychoschoolVal/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
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

</head>
<body>
  

<div class="test-loader">
  <figure class="figure-loader">
  <div></div><div></div>
  <div></div><div></div>
  <div></div><div></div>
  <div></div><div></div>
</figure class="figure-loader">
</div> 

<script type="text/javascript">
  $(document).ready(function(){
      $(".test-loader").fadeOut(1000);
  })
</script>

      <nav>

                        <div class="menu-icon">
                              <div>
                              <img class="image-logo-2" src="img/logo-youtube-test.png">
                              </div>
                              <i class="fa fa-bars fa-2x" onclick="responsive()"></i>
                        </div>

                        

                        <div class="menu">
                              <ul>
                        <div>
                              <a href="index.php"><img class="image-logo" src="img/logo-youtube-test.png"></a>
                        </div>
                        <div id="conteneur-image-search">
                              <img class="image-search" src="img/loupe-barre-recherche.png" onclick="searchbox()">
                        </div>
                        <div id="conteneur-image-cancel">
                              <img class="image-search" src="img/cancel.png" onclick="closesearchbox()">
                        </div>
                              <div id="conteneur-bouton">
                                    <div class="conteneur-barre-recherche-2">
                                  <form class="form-recherche" method="GET" action="recherche.php">
                                  <input id="input-recherche-2" minlength="1" type="text" name="recherche" placeholder="Recherche">
                                  <button id="bouton-recherche-2" type="submit" name="submit"><img class="image-search-2" src="img/loupe-barre-recherche.png"></button>
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
			                        		<li class="active-2"><form class="form-close" method="POST" action="/psychoschoolVal/includes/backrownd/compts/logout.php">
			                        		<input type="hidden" name="submit" value=" ">
			                        		<input class="log" type="image" src="/psychoschoolVal/img/power-button-off.png" name="submit"></input></form></li>';
			                        	}
			                        ?>
                              </div>
                        <div class="conteneur-barre-recherche">
                              <form class="form-recherche-2" method="GET" action="recherche.php">
                                  <input id="input-recherche" type="text" minlength="1" name="recherche" placeholder="Recherche">
                                  <button id="bouton-recherche" type="submit" name="submit"><img class="image-search-2" src="img/loupe-barre-recherche.png"></button>
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

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });




      </script>
