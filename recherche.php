<?php
  include_once("includes/modules/header.php");

  if (isset($_GET['submit'])) {
  	include_once('includes/backrownd/dph.php');
  	$recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
  	$recherches = explode(" ", $recherche);


  	foreach ($recherches as $r) {
  		if (strlen($r) > 1) {
  			$sql = $sql = "SELECT * FROM article WHERE article_titre LIKE '%$r%' OR article_resumer LIKE '%$r%' OR article_tag LIKE '%$r%'";
  			$result = mysqli_query($conn, $sql);
  			$resultChek = mysqli_num_rows($result);

  			if ($resultChek > 0) {
  				while ($row = mysqli_fetch_assoc($result)) {
  					if ($row['article_thechnique']) {
  						include_once("includes/modules/pres/presart.php");
  					}
  				}
  			}
  		}
  	}  	
  }
  include_once("includes/modules/footer.php");
?>