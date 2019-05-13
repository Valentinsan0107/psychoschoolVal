<?php

if (isset($_POST['Submit'])) {
	$code = $_POST['code'];
	#if ($code == '"a6*URYxhbx4+}CV;uw'){
		session_start();
		$_SESSION["adminco"] = "yo";
		header("Location: index.php?reussite=".$_SESSION["adminco"]);
	#}
}
#header("Location: index.php?echec=");