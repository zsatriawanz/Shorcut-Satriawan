<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body class="main">
	<div class="container">
		<div class="back">
			<a href="../index.php">
				<span>&lt </span>
				<span>HOME</span>
			</a>
		</div>

		<div class="side">
			
		</div>
	</div>


	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function(){
			loadData();
		})

		function loadData(){
			$.get('data.php',function(data){
				$('.side').html(data);
				$('form').on('submit',function(e)
				{
					e.preventDefault();
					$.ajax({
						type:$(this).attr('method'),
						url:$(this).attr('action'),
						data:$(this).serialize(),
						success:function(){
							loadData();
							resetForm();
						}
					});
				})
				$('.hapusData').click(function(e){
					e.preventDefault();
					$.ajax({
						type : 'get',
						url : $(this).attr('href'),
						data : $(this).serialize(),
						success : function(){
							loadData();
							resetFrom();
						}
					});
				})
				$('.ubahData').click(function(e){
					e.preventDefault();
					$('[name=tombol]').html("Ubah <span class='ubah'></span>");
					$('[name=nama]').val($(this).attr('nama'));
					$('[name=url]').val($(this).attr('url'));
					$('form').attr('action',$(this).attr('href'));
				})
				$('.ulang').click(function(e){
					e.preventDefault();
					$('[name=tombol]').html("Tambah link <i class='t-tambah'></i>");
					$("[type=text]").val("");
					$('form').attr('action',$(this).attr('href'));
				})
			})
		}
		function resetForm()
		{
			$("[type=text]").val("");
		}

	</script>
</body>
</html>