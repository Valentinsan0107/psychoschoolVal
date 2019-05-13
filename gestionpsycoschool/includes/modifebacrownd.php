<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$url = $_SERVER['HTTP_REFERER'];

$id = $_POST['Aid'];
$ANom = $_POST['ANom'];
$ATitre = mysqli_real_escape_string($conn, $_POST['ATitre']);
$AResumer = mysqli_real_escape_string($conn, $_POST['AResumer']);
$ATitrehaut = mysqli_real_escape_string($conn, $_POST['ATitrehaut']);
$ATag = mysqli_real_escape_string($conn, $_POST['Atag']);
$Aprix = mysqli_real_escape_string($conn, $_POST['Aprix']);
$ALien = mysqli_real_escape_string($conn, $_POST['ALien']);
$Anote = mysqli_real_escape_string($conn, $_POST['Anote']);
$Amotclef = mysqli_real_escape_string($conn, $_POST['Amotclef']);
$Adescription = mysqli_real_escape_string($conn, $_POST['Adescription']);

$sql = "UPDATE article SET article_nom='$ANom', article_titre='$ATitre', article_resumer='$AResumer', article_titrehaut='$ATitrehaut', article_tag='$ATag', article_note = '$Anote', article_lien='$ALien', article_prix='$Aprix', article_motclef='$Amotclef', article_description='$Adescription' WHERE article_id='$id'";
$result = mysqli_query($conn, $sql);

header("Location: ".$_SERVER['HTTP_REFERER']);
?>