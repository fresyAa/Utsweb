<?php include("koneksi.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Toko Barokah</title>
</head>

<body>
	<header>
		<h3>Barang Yang Ada Dalam Toko Barokah</h3>
	</header>
	
	<nav>
		<a href="form_baru.php">[+] Tambah Baru</a>
		<br><br>
	</nav>
	
	
		<form action="" method="post">
			<input type="text" name="keywoard" size="70" autofocus placeholder="Masukkan keywoard Yang Ingin Dicari..." autocomplete="off">
			<button type="submit" name="cari"> Cari!</button>
			<br><br>
		</form>

	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Jumlah Stok</th>
			<th>Harga Satuan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM toko_barokah";
		$query = mysqli_query($db, $sql);

		while($barang = mysqli_fetch_array($query)){
			
			echo "<tr>";
			
			echo "<td>".$barang['kode_barang']."</td>";
			echo "<td>".$barang['nama_barang']."</td>";
			echo "<td>".$barang['kategori']."</td>";
			echo "<td>".$barang['jumlah_stok']."</td>";
			echo "<td>".$barang['harga_satuan']."</td>";
			
			echo "<td>";
			echo "<a href='form_edit.php?kode_barang=".$barang['kode_barang']."'>Edit</a> | ";
			echo "<a href='hapus.php?kode_barang=".$barang['kode_barang']."'>Hapus</a>";
			
			echo "<a href='form_searching.php?kode_barang=".$barang['kode_barang']."'>Hapus</a>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</body>
</html>
