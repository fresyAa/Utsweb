<!DOCTYPE html>
<html>
<head>
	<title>Barokah Toko UTS</title>
</head>

<body>
	<header>
		<h3><center>Toko Barokah</center></h3>
		<center><img src="tokobarokah.jpg">	</center> 
		<h1>Menu Toko</h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="form_baru.php">Tambah Data Baru</a></li> 
			<li><a href="form_edit.php">Edit Data Yang Sudah Ada</a></li> 
			<li><a href="form_search.php">Cari Data Toko</a></li> 
		</ul>
	</nav>
	

	
	<?php if(isset($_GET['status'])): ?>
		<?php
			if($_GET['status'] == 'sukses') {
				echo "Pemasukkan Data baru berhasil!";
			} else {
				echo "Pemasukkan Data Gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
