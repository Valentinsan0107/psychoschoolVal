<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (isset($_GET['submitthec'])) {
	$idarticle = $_GET['idarticle'];
	$nvvaleur = $_GET['nvvaleur'];
	$sql = "UPDATE article SET article_thechnique='$nvvaleur' WHERE article_id='$idarticle'";

	$result = mysqli_query($conn, $sql);

	header("Location: ../index.php");
}elseif (isset($_GET['submitprio'])) {
	$idarticle = $_GET['idarticle'];
	$nvvaleur = $_GET['nvvaleur'];
	$sql = "UPDATE article SET article_priorite='$nvvaleur' WHERE article_id='$idarticle'";

	$result = mysqli_query($conn, $sql);

	header("Location: ../index.php");
}


?>