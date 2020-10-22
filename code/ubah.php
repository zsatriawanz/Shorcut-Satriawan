<?php
include 'koneksi.php';
$namanya = $_POST['nama'];
$urlnya = $_POST['url'];

$select = "UPDATE lengkap SET namanya='$namanya',urlnya='$urlnya' WHERE id='".$_GET['id']."'";
$result = mysqli_query($conf,$select);

?>