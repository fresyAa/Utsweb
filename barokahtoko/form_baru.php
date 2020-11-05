<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Baru Toko Barokah</title>
</head>

<body>
	<header>
		<h3>Form Tambah Data Toko Barokah</h3>
	</header>
	
	<form action="proses_baru.php" method="POST"> 
		
		<fieldset>
		
		<p>
			<label for="kode_barang">kode_barang: </label> 
			<input type="text" name="kode_barang" placeholder="kode_barang" /> 
		<p>
			<label for="nama_barang">nama_barang : </label>
			<input type="text" name="nama_barang" id="nama_barang" placeholder="nama_barang">
		</p>
		<p>
			<label for="kategori">Kategori: </label> 
				<option>makanan</option>
				<option>minuman</option>
			</select>
		</p>
		<p>
			<label for="jumlah_stok">jumlah_stok : </label>
			<input type="text" name="jumlah_stok" id="jumlah_stok" placeholder="jumlah_stok">
		</p>
		<p>
			<label for="harga_satuan">harga_satuan : </label>
			<input type="text" name="harga_satuan" id="harga_satuan" placeholder="harga_satuan">
		</p>
		<p>
			<input type="submit" value="Baru" name="baru" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
