<?php
include 'koneksi.php';
$select = "DELETE FROM lengkap WHERE id='".$_GET['id']."'";
mysqli_query($conf,$select);

?>