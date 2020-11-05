<?php 

include("koneksi.php");

if( !isset($_GET['kode_barang']) ){
	
	header('Location: list_barang.php');
}


$kode_barang = $_GET['kode_barang'];


$sql = "SELECT * FROM toko_barokah WHERE kode_barang='$kode_barang'";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data Toko Barokah</title>
</head>

<body>
	<header>
		<h3>Form Edit Data</h3>
	</header>
	
	<form action="proses_edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="kode_barang" value="<?php echo $barang['kode_barang'] ?>" />
		<p>
			<label for="kode_barang">Kode Barang: </label>
			<input type="text" name="kode_barang" placeholder="kode_barang" value="<?php echo $barang['kode_barang'] ?>" />
		</p>
		<p>
			<label for="nama_barang">Nama Barang: </label>
			<input type="text" name="nama_barang" placeholder="nama_barang" value="<?php echo $barang['nama_barang'] ?>" />
		</p>
		<p>
			<label for="kategori">Kategori: </label>
			<?php $kategori = $barang['kategori']; ?>
			<label><input type="radio" name="kategori" value="makanan" <?php echo ($kategori == 'makanan') ? "checked": "" ?>> makanan</label>
			<label><input type="radio" name="kategori" value="minuman" <?php echo ($kategori == 'minuman') ? "checked": "" ?>> minuman</label>
		</p>
		<p>
			<label for="jumlah_stok">Jumlah Stok: </label>
			<input type="text" name="jumlah_stok" placeholder="jumlah_stok" value="<?php echo $barang['jumlah_stok'] ?>" />
		</p>
		<p>
			<label for="harga_satuan">Harga Satuan: </label>
			<input type="text" name="harga_satuan" placeholder="harga_satuan" value="<?php echo $barang['harga_satuan'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>