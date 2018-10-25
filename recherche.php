<?php
  include_once("includes/modules/header.php");

  if (isset($_GET['submit'])) {
    echo "<div class='article-conteneur'>";
<<<<<<< HEAD
  	include('includes/backrownd/dph.php');
  	$recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
=======
    include_once('includes/backrownd/dph.php');
    $recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
    $artselec = array();

    $sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$recherche%' OR article_resumer LIKE '%$recherche%' OR article_tag LIKE '%$recherche%'";
    $result = mysqli_query($conn, $sql);
    $resultChek = mysqli_num_rows($result);

    if ($resultChek > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if (!in_array($row['article_id'], $artselec)) {
          array_push($artselec, $row['article_id']);
          if ($row['article_thechnique'] == 1) {
            include("includes/modules/pres/presart.php");
          }
        }
      }
    }


>>>>>>> 70958a3532963a01b608dfe8ddc2eecd6eede28e
  	$recherches = explode(" ", $recherche);

    foreach ($recherches as $r) {
  		if (strlen($r) > 2) {
  			$sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$r%' OR article_resumer LIKE '%$r%' OR article_tag LIKE '%$r%'";
  			$result = mysqli_query($conn, $sql);
  			$resultChek = mysqli_num_rows($result);

  			if ($resultChek > 0) {
  				while ($row = mysqli_fetch_assoc($result)) {
<<<<<<< HEAD
  					if ($row['article_thechnique'] == 1) {
  						include("includes/modules/pres/presart.php");
  					}
=======
            if (!in_array($row['article_id'], $artselec)) {
              array_push($artselec, $row['article_id']);
              if ($row['article_thechnique'] == 1) {
                include("includes/modules/pres/presart.php");
              }
            }
>>>>>>> 70958a3532963a01b608dfe8ddc2eecd6eede28e
  				}
  			}
  		}
  	}  	
  }
  if (empty($artselec)) {
    echo "<h1>Il n y a pas d article corespondent a votre recherche</h1>";
  }

  echo "</div>";
  include("includes/modules/footer.php");
?>