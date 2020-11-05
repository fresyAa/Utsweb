<?php

include("koneksi.php");

if( isset($_GET['kode_barang']) ){
	
	
	$kode_barang = $_GET['kode_barang'];
	
	
	$sql = "DELETE FROM toko_barokah WHERE kode_barang='$kode_barang'";
	$query = mysqli_query($db, $sql);
	
	
	if( $query ){
		echo "
			<script>
			alert('Data Berhasil dihapus!');
			document.location.href= 'list_barang.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('Data Gagal dihapus!');
			document.location.href= 'list_barang.php';
			</script>
		";
	}
	
} else {
	die("akses dilarang...");
}

?>