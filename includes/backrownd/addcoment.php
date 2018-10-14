<?php
session_start();
include_once('dph.php');
include_once('oldpage.php');

if (isset($_SESSION['u_id'])) {
	if (isset($_POST['submitsolo'])) {
		$coment = mysqli_real_escape_string($conn, $_POST['coment']);
		$nomfile = $_POST['nomfile'];

		if (empty($coment)) {
			header("Location: ".$nompagesuite."addcoment=empty");
		} else {
			$createur = $_SESSION['u_pseudo'];
			$date = date("Y-m-d H/i/s");

			$sql = "INSERT INTO comentaires (coment_page, coment_origine, coment_contenue, coment_createur, coment_date) VALUES ('$nomfile', 'root', '$coment', '$createur', '$date');";
			$result = mysqli_query($conn, $sql);
			
			header("Location: ".$nompage);
		}
	}elseif (isset($_POST['submitsupp'])) {
		$idcom = $_POST['idcoment'];

		$sql = "DELETE FROM comentaires WHERE coment_id='$idcom'";
		$result = mysqli_query($conn, $sql);
		header("Location: ".$nompage);
	}else {
		header("Location: ".$nompagesuite."addcoment=error");
	}
}else {
	header("Location: ".$nompagesuite."addcoment=error");
}