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
                        		echo '<li><a class="active" onclick="openModal()" href="#">Se connecter</a></li>';
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
		
	
	<div id="modal">
<button class="btnClose" onclick="closeModal()">&times;</button>
		<div class="conteneur-création-connexion">
			
		
			<div class="connexion-compte">
				<h1 class="phrase-formulaire">Tu as déjà un compte ? Connecte-toi !</h1>
			<form class="form-connexion" action="/psychoschoolVal/includes/backrownd/compts/login.php" method="POST">
				<input class="input-connexion" minlength="6" maxlength="50"  type="text" name="uid" placeholder="Pseudo ou email">
				<input class="input-connexion" minlength="6" maxlength="20" type="password" name="password" placeholder="Mot de passe">
				<button class="button-connexion" type="submit" name="submit">Valider</button>
			</form>
			</div>

			<div class="création-compte">
				<h1 class="phrase-formulaire">Tu n'as pas encore de compte PsychoSchool ? </h1>
				<form class="form-création" action="/psychoschoolVal/includes/backrownd/compts/signup.php" method="POST">
					<input class="input-création" maxlength="50" type="email" name="email" placeholder="Email">
					<input class="input-création" maxlength="20" minlength="6" type="text" name="pseudo" placeholder="Ton pseudo">
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd" placeholder="Mot de passe">
					<input class="input-création" maxlength="20" minlength="6" type="password" name="pwd2" placeholder="Confirmer le mot de passe">
					<button class="button-création" type="submit" name="submit">Valider</button>
				</form>
			</div>
		</div>		
			
			
			<!--La div d en dessous te permet de lui metre un classe pr modifeier le text afficher en en fessant .(nom class) p en css(tu connait), esite pas a modifier les texte a l interieur ) -->
			<div>
				<?php
				if (isset($_GET['loginsignup'])) {
					if ($_GET['loginsignup'] == "empty") {
						echo "<p>Tout les chans ne sont pas remplit</p>";
					}
					if ($_GET['loginsignup'] == "nomatch") {
						echo "<p>Les mots de pass ne sont pas les mème</p>";
					}
					if ($_GET['loginsignup'] == "email") {
						echo "<p>L email est pas valide</p>";
					}
					if ($_GET['loginsignup'] == "admin") {
						echo "<p>Vous ne pouver pas vous appeller admin</p>";
					}
					if ($_GET['loginsignup'] == "usertaken") {
						echo "<p>Pseudo deja existant</p>";
					}
					if ($_GET['loginsignup'] == "emailtaken") {
						echo "<p>Email deja existant</p>";
					}
					if ($_GET['loginsignup'] == "error") {
						echo "<p>Il y a eu une erreur</p>";
					}
					if ($_GET['loginsignup'] == "mailprobleme") {
						echo "<p>Il y a eu un probleme avec l envoie de mail</p>";
					}
					if ($_GET['loginsignup'] == "shortpseudo") {
						echo "<p>Le pseudo est trops court</p>";
					}
					if ($_GET['loginsignup'] == "shortpwd") {
						echo "<p>Le mot de pass est trops court</p>";
					}
				}
				?>
			</div>

	</div>

	<script type="text/javascript">

function openModal() {
	document.getElementById("modal").style.top = '120px';
	document.getElementById("modal").style.transition = '0.8s ease';
}

function closeModal() {
	document.getElementById("modal").style.top = '-600px';
	document.getElementById("modal").style.transition = '0.8s ease';
}
</script>

<?php  
if (isset($_GET['signup'])) {
	echo '<script type="text/javascript">
		  window.onload = function OpenModal2()
		{
		  setTimeout(function OpenModal2()
  		  {
  		  document.getElementById("modal").style.top = "120px";
  		  }, 100);document.getElementById("modal").style.transition = "none";
  		}
		</script>';
}elseif(isset($_GET['login'])){
	if ($_GET['login'] !== "sucess") {
		echo '<script type="text/javascript">
		  window.onload = function OpenModal2()
		{
		  setTimeout(function OpenModal2()
  		  {
  		  document.getElementById("modal").style.top = "120px";
  		  }, 100);document.getElementById("modal").style.transition = "none";
  		}
		</script>';
	}
}
?>
