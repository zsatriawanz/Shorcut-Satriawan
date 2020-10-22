<?php
require "koneksi.php";
$pilih = "SELECT * FROM lengkap ORDER BY id DESC";
$tampilkan = mysqli_query($conf,$pilih);
?>



<div class="isi">
	<!--  car -->
	<div class="card">
		<div class="even">
			<span><a class='ulang' href='tambahData.php'><i class='reflesh'></i></a></span>
		</div>
	</div>
	<?php while($row = mysqli_fetch_assoc($tampilkan)) : ?>
		<div class="card">
			<div class="header">
				<a href="<?=$row['urlnya'];?>" target="_blank"><?= $row['namanya'];?></a>
			</div>
			<div class="keterangan">
				<?php $link_ubah = "<a class='ubahData' href='ubah.php?id=".$row['id']."' nama='".$row['namanya']."'url='".$row['urlnya']."' ><i class='edit'></i></a>";?>
				<?php $link_hapus = "<a class='hapusData' href='hapus.php?id=".$row['id']."' ><i class='hapus'></i></a>";?>
				<?=$link_ubah;?> | <?=$link_hapus;?>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- end card -->
</div>
<div class="sidebar">
	<form action="tambahData.php" method="POST" >
		<button type="submit" name="tombol">Tambah link <span class='t-tambah'></span></button>
		<input type="text" placeholder="Nama" name="nama">
		<input type="text" placeholder="Url" name="url">
	</form>	
	<div class="tombol">
		<span onclick="resetForm()">Bersih</span> 
	</div>
</div>
