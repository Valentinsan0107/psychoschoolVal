<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$id = $_POST['Aid'];

if (!empty($_FILES['files']['name']['0'])) {
	$files = $_FILES['files'];
	foreach ($files['name'] as $position => $file_name) {
		$file_TMP = $files['tmp_name'][$position];
		$file_size = $files['size'][$position];
		$file_error = $files['error'][$position];
		$name = $files['name'][$position];


		$fileExt = explode('.', $name);
		$fileActualExt = strtolower(end($fileExt));
		if ($file_error === 0) {
			if ($file_size < 1000000) {
				$filenamenew = $fileExt[0]."-".$id.'.'.$fileActualExt;
				$fileDestination = "../../psychoschoolVal/uploads/images/".$filenamenew;
				move_uploaded_file($file_TMP, $fileDestination);

				$sql = "SELECT * FROM article WHERE article_id='$id'";
				$result = mysqli_query($conn, $sql);
				$resultChek = mysqli_num_rows($result);
				if ($resultChek == 1) {
					$row = mysqli_fetch_assoc($result);
					$Aimg = $row['article_image'];
					$Anvimg = $Aimg.",".$filenamenew;

					$sql = "UPDATE article SET article_image='$Anvimg' WHERE article_id='$id'";
					$result = mysqli_query($conn, $sql);
				}
			}else{
				echo "trops gros";
			}
		}else{
			echo "error";
		}
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
}