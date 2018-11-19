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

<div class="fleche-retour-haut-conteneur">
	<img class="fleche-retour-haut-image" src="/psychoschoolVal/img/arrow-up-.png">
</div>

      <div class="wrapper">
            <nav>
                  <div>
                  	<a href="index.php"><img class="logo" src="img/logo-youtube-test.jpg"></a>

                  </div>
                  <ul>
                        <li><a href="/psychoschoolVal/index.php">Accueil</a></li>
                        <li><a href="/psychoschoolVal/techniques.php">Les Techniques</a></li>
                        <li><a href="/psychoschoolVal/livre.php">Livre</a></li>
                        <li><a href="#">A propos</a></li>
                        <form class="barre-recherche-conteneur-2" method="GET" action="recherche.php">
    						<input class="champ-recherche-2" type="text" name="recherche" minlength="1" placeholder="Tu cherches quelque chose ?">
    						<button class="search-button-2" type="submit" name="submit"><img class="image-barre-recherche" src="img/loupe-barre-recherche.png"></button>
  						</form>

                        <?php
                        	if (!isset($_SESSION['u_id'])) {
                        		echo '<li><a class="active" href="log-in.php">Se connecter</a></li>';
                        	} else {
                        		echo '<li><a class="active">'.$_SESSION['u_pseudo'].'</a></li>
                        	
                        		<form action="/psychoschoolVal/includes/backrownd/compts/logout.php" method="POST">
                        			<input type="hidden" name="submit" value=" ">
            						<input class="log" type="image" src="/psychoschoolVal/img/logo-logout-blanc.png" name="submit"></input>
            					</form>';
                        	}
                        	
                        ?>

                  </ul>
            </nav>
		
	

		
