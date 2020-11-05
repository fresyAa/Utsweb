<?php

include("koneksi.php"); //memasukkan require atau include file koneksi


if(isset($_POST['baru'])){
	
	
	$kode_barang = $_POST['kode_barang'];
	$nama_barang = $_POST['nama_barang'];
	$kategori = $_POST['kategori'];
	$jumlah_stok = $_POST['jumlah_stok'];
	$harga_satuan = $_POST['harga_satuan'];
	
	
	$sql = "INSERT INTO toko_barokah VALUES
	('$kode_barang', '$nama_barang', '$kategori', '$jumlah_stok', '$harga_satuan')";
	$query = mysqli_query($db, $sql);
	

	if( $query ) {
		echo "
			<script>
			alert('Data Berhasil ditambahkan!');
			document.location.href= 'list_barang.php';
			</script>
		";
		
	} else {
		echo "
			<script>
			alert('Data Gagal ditambahkan!');
			document.location.href= 'list_barang.php';
			</script>
		";
		
	}
	
	
} else {
	die("Akses dilarang...");
}

?>