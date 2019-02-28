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
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="/psychoschoolVal/img/icon-brain.png">
	<link rel="stylesheet" type="text/css" href="/psychoschoolVal/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
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



	<script type="text/javascript">
	$(function(){
		$('.fleche-retour-haut-image') .click(function() {
			$('html,body').animate({scrollTop: 0}, 'slow');


		});

		$(window) .scroll(function(){
			if($(window) .scrollTop()==0){
				$('.fleche-retour-haut-image') .fadeOut();
			}else{
				$('.fleche-retour-haut-image') .fadeIn();
		}

		});
	});
</script>
  
<script type="text/javascript">
  $(function(){

    $(".conteneur-phrase-présentation-matériel").hide();
    $(".conteneur-phrase-présentation-matériel-2").hide();

    $(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 100 ) {

if ($(this).scrollTop() > 700 ) {
$('.conteneur-phrase-présentation-matériel').fadeIn(600);
}

if ($(this).scrollTop() > 1800 ) {
$('.conteneur-phrase-présentation-matériel-2').fadeIn(600);
}

});

});

});
</script>
<!--
<script type="text/javascript">
  function fixDive() {
  var $cache = $('.matériel-conteneur');
  var hauteur_2= $('.matériel-conteneur').height(); 
  if ($(window).scrollTop() > hauteur_2-604.8) 
    $cache.css({'margin-left': '0'}); 
  else
    $cache.css({'margin-left': '340px'});
}
$(window).scroll(fixDive);
fixDive();
</script>

<script type="text/javascript">
  function fixDive() {
  var $cache = $('.conteneur-pub-et-menu');
  var hauteur_2 = $('.matériel-conteneur').height(); 
  if ($(window).scrollTop() > hauteur_2-604.8) 
    $cache.css({'position': 'static'}); 
  else
    $cache.css({'position': 'fixed'});
}
$(window).scroll(fixDive);
fixDive();
</script>

<script type="text/javascript">
  function fixDive() {
  var $cache = $('.conteneur-pub-et-menu');
  var hauteur_2 = $('.matériel-conteneur').height(); 
  if ($(window).scrollTop() > hauteur_2-604.8) 
    $cache.css({'margin-top': hauteur_2-604.8}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDive);
fixDive();
</script>

<script type="text/javascript">
  function fixDiv() {
  var $cache = $('.pub-3'); 
  var hauteur = $('.conteneur-tout-sauf-pub').height();
  if ($(window).scrollTop() > hauteur-650)
    $cache.css({'position': 'static'}); 
  else
    $cache.css({'position': 'fixed'});
}
$(window).scroll(fixDiv);
fixDiv();
</script>



<script type="text/javascript">
  function fixDiv() {
  var $cache = $('.pub-3');
  var hauteur = $('.conteneur-tout-sauf-pub').height();
  if ($(window).scrollTop() > hauteur-650) 
    $cache.css({'margin-left': '0'}); 
  else
    $cache.css({'margin-left': '1181.6px'});
}
$(window).scroll(fixDiv);
fixDiv();
</script>



<script type="text/javascript">
  function fixDiv() {
  var $cache = $('.pub-3'); 
  var hauteur = $('.conteneur-tout-sauf-pub').height();
  if ($(window).scrollTop() > hauteur-650) 
    $cache.css({'margin-top': hauteur-650}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDiv);
fixDiv();
</script>




























<script type="text/javascript">
  function fixDivr() {
  var $cache = $('.pub-5');
  var hauteur_3 = $('.conteneur-avis-conseils-2').height();
  if ($(window).scrollTop() > hauteur_3-691) 
    $cache.css({'margin-left': '2%'}); 
  else
    $cache.css({'margin-left': '1192.7499px'});
}
$(window).scroll(fixDivr);
fixDivr();
</script>



<script type="text/javascript">
  function fixDivr() {
  var $cache = $('.pub-5'); 
  var hauteur_3 = $('.conteneur-avis-conseils-2').height();
  if ($(window).scrollTop() > hauteur_3-691)
    $cache.css({'position': 'static'}); 
  else
    $cache.css({'position': 'fixed'});
}
$(window).scroll(fixDivr);
fixDivr();
</script>



<script type="text/javascript">
  function fixDivr() {
  var $cache = $('.pub-5'); 
  var hauteur_3 = $('.conteneur-avis-conseils-2').height();
  if ($(window).scrollTop() > hauteur_3-691) 
    $cache.css({'margin-top': hauteur_3-691}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDivr);
fixDivr();
</script>














<script type="text/javascript">
  function fixDivf() {
  var $cache = $('.conteneur-avis-conseils-2');
  var hauteur_4= $('.conteneur-avis-conseils-2').height(); 
  if ($(window).scrollTop() > hauteur_4-691) 
    $cache.css({'margin-left': '0'}); 
  else
    $cache.css({'margin-left': '402.7666px'});
}
$(window).scroll(fixDivf);
fixDivf();
</script>

<script type="text/javascript">
  function fixDivf() {
  var $cache = $('.whoareyou-4');
  var hauteur_4 = $('.conteneur-avis-conseils-2').height(); 
  if ($(window).scrollTop() > hauteur_4-691) 
    $cache.css({'position': 'static'}); 
  else
    $cache.css({'position': 'fixed'});
}
$(window).scroll(fixDivf);
fixDivf();
</script>

<script type="text/javascript">
  function fixDivf() {
  var $cache = $('.whoareyou-4');
  var hauteur_4 = $('.conteneur-avis-conseils-2').height(); 
  if ($(window).scrollTop() > hauteur_4-691) 
    $cache.css({'margin-top': hauteur_4-691}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDivf);
fixDivf();
</script>






<script type="text/javascript">
  function fixDivf() {
  var $cache = $('.whoareyou-4');
  var hauteur_4 = $('.conteneur-avis-conseils-2').height(); 
  if ($(window).scrollTop() > hauteur_4-600) 
    $cache.css({'transition': 'none'}); 
  else
    $cache.css({'transition': '0.6s ease'});
}
$(window).scroll(fixDivf);
fixDivf();
</script>

<script type="text/javascript">
  function fixDivf() {
  var $cache = $('.whoareyou-4');
  var hauteur_4 = $('.conteneur-avis-conseils-2').height(); 
  if ($(window).scrollTop() < hauteur_4-600) 
    $cache.css({'transition': 'none'}); 
  else
    $cache.css({'transition': '0.6s ease'});
}
$(window).scroll(fixDivf);
fixDivf();
</script>
-->

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



<div class="fleche-retour-haut-conteneur">
	<img class="fleche-retour-haut-image" src="/psychoschoolVal/img/arrow-up-.png">
</div>

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
                              <img class="image-logo" src="img/logo-youtube-test.png">
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

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });




      </script>
