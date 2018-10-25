<?php
  include_once("includes/modules/header.php");
  if (isset($_GET['submit'])) {
  	include_once('includes/backrownd/dph.php');
  	$recherche = mysqli_real_escape_string($conn, $_GET['recherche']);
  	
  }
  include_once("includes/modules/footer.php");
?>