<?php
if (isset($_GET['submittech'])) {
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$nv = $_GET['tags'];

$sql = "UPDATE Tags_Liste SET Tags='$nv' WHERE Nom='Tech'";
$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
}