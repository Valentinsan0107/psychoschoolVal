<?php
session_start();
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
	<link rel="icon" type="image/x-icon" href="/psychoschoolVal/img/icon-brain.png">
	<link rel="stylesheet" type="text/css" href="/psychoschoolVal/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript">
            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('nav').addClass('black');
                  }
                  else {
                       $('nav').removeClass('black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('.image-barre-recherche').addClass('image-barre-recherche-black');
                  }
                  else {
                       $('.image-barre-recherche').removeClass('image-barre-recherche-black') 
                  }
            })












            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('.barre-recherche-conteneur-2').addClass('barre-recherche-conteneur-2-black');
                  }
                  else {
                       $('.barre-recherche-conteneur-2').removeClass('barre-recherche-conteneur-2-black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('.image-barre-recherche').addClass('image-barre-recherche-black');
                  }
                  else {
                       $('.image-barre-recherche').removeClass('image-barre-recherche-black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('.champ-recherche-2').addClass('champ-recherche-2-black');
                  }
                  else {
                       $('.champ-recherche-2').removeClass('champ-recherche-2-black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('.search-button-2').addClass('search-button-2-black');
                  }
                  else {
                       $('.search-button-2').removeClass('search-button-2-black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('nav ul li a.active').addClass('active-black');
                  }
                  else {
                       $('nav ul li a.active').removeClass('active-black') 
                  }
            })

            $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('nav .logo').addClass('black-logo');
                  }
                  else {
                       $('nav .logo').removeClass('black-logo') 
                  }
            })

             $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('nav ul li a').addClass('black-button');
                  }
                  else {
                       $('nav ul li a').removeClass('black-button') 
                  }
            })

             $(window).on('scroll', function() {
                  if($(window).scrollTop()) {
                        $('input.log').addClass('log-black');
                  }
                  else {
                       $('input.log').removeClass('log-black') 
                  }
            })
            
      </script>

      <script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.conteneur-général-1').classList.replace("conteneur-général-1", "conteneur-général-2");
}, false);
    </script>

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

    $(".contenu-conteneur").hide();
    $(".conteneur-phrase-présentation-matériel").hide();
    $(".conteneur-phrase-présentation-matériel-2").hide();

    $(function () {
$(window).scroll(function () {
if ($(this).scrollTop() > 100 ) {
$('.contenu-conteneur').fadeIn(600);
} 

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

<script type="text/javascript">
  function fixDiv() {
  var $cache = $('.pub-3'); 
  var hauteur = $('.conteneur-tout-sauf-pub').height();
  if ($(window).scrollTop() > hauteur-708.6)
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
  if ($(window).scrollTop() > hauteur-708.6) 
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
  if ($(window).scrollTop() > hauteur-708.6) 
    $cache.css({'margin-top': hauteur-708.6}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDiv);
fixDiv();
</script>










<script type="text/javascript">
  function fixDive() {
  var $cache = $('.matériel-conteneur');
  var hauteur_2= $('.matériel-conteneur').height(); 
  if ($(window).scrollTop() > hauteur_2-692.8) 
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
  if ($(window).scrollTop() > hauteur_2-692.8) 
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
  if ($(window).scrollTop() > hauteur_2-692.8) 
    $cache.css({'margin-top': hauteur_2-692.8}); 
  else
    $cache.css({'margin-top': '0'});
}
$(window).scroll(fixDive);
fixDive();
</script>





























<script type="text/javascript">
  function fixDivr() {
  var $cache = $('.pub-5');
  var hauteur_3 = $('.conteneur-avis-conseils-2').height();
  if ($(window).scrollTop() > hauteur_3-600) 
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
  if ($(window).scrollTop() > hauteur_3-600)
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
  if ($(window).scrollTop() > hauteur_3-600) 
    $cache.css({'margin-top': hauteur_3-600}); 
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
  if ($(window).scrollTop() > hauteur_4-600) 
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
  if ($(window).scrollTop() > hauteur_4-600) 
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
  if ($(window).scrollTop() > hauteur_4-600) 
    $cache.css({'margin-top': hauteur_4-600}); 
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







<div class="fleche-retour-haut-conteneur">
	<img class="fleche-retour-haut-image" src="/psychoschoolVal/img/arrow-up-.png">
</div>

      <div class="wrapper">
            <nav>
                  <div>
                  	<a href="index.php"><img class="logo" src="img/logo-youtube-test.png"></a>

                  </div>
                  <ul>
                        <li><a href="/psychoschoolVal/index.php">Accueil</a></li>
                        <li><a href="/psychoschoolVal/techniques.php">Les Techniques</a></li>
                        <li><a href="/psychoschoolVal/livre.php">Matériel</a></li>
                        <li><a href="/psychoschoolVal/about.php">À propos</a></li>
                        <form class="barre-recherche-conteneur-2" method="GET" action="recherche.php">
    						<input class="champ-recherche-2" type="text" name="recherche" minlength="1" placeholder="Tu cherches quelque chose ?">
    						<button class="search-button-2" type="submit" name="submit"><img class="image-barre-recherche" src="img/loupe-barre-recherche.png"></button>
  						</form>

                        <?php
                        	if (!isset($_SESSION['u_id'])) {
                        		echo '<li><a class="active" href="log-in.php">Se connecter</a></li>';
                        	} else {
                        		echo '<li><a class="active">'.htmlspecialchars($_SESSION['u_pseudo']).'</a></li>
                        	
                        		<form action="/psychoschoolVal/includes/backrownd/compts/logout.php" method="POST">
                        			<input type="hidden" name="submit" value=" ">
            						<input class="log" type="image" src="/psychoschoolVal/img/logo-logout-blanc.png" name="submit"></input>
            					</form>';
                        	}
                        	
                        ?>

                  </ul>
            </nav>	
