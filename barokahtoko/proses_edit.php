<?php

include("koneksi.php");


if(isset($_POST['simpan'])){
	
	
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$jumlah_stok = $_POST['jumlah_stok'];
	$harga_satuan = $_POST['harga_satuan'];
	
	
	
	$sql = "UPDATE toko_barokah SET kode_barang='$kode_barang', nama_barang='$nama_barang', kategori='$kategori', jumlah_stok='$jumlah_stok', harga_satuan='$harga_satuan' WHERE kode_barang='$kode_barang'";
	$query = mysqli_query($db, $sql);
	
	
	if( $query ) {
		
		echo "
			<script>
			alert('Data Berhasil diperbarui!');
			document.location.href= 'list_barang.php';
			</script>
		";
		
	} else {
		
		echo "
			<script>
			alert('Data Gagal diperbarui!');
			document.location.href= 'list_barang.php';
			</script>
		";
		
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
