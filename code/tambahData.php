<?php
require "koneksi.php";

	$namanya = htmlspecialchars($_POST['nama']);
	$urlnya = htmlspecialchars($_POST['url']);

	$code = "INSERT INTO lengkap VALUES ('','$namanya','$urlnya')";


	mysqli_query($conf,$code);
	return mysqli_affected_rows($conf);

?>