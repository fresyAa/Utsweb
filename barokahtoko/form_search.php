<?php 
	include ("koneksi.php");
	
	if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM toko_barokah WHERE 
    kode_barang LIKE '%" . $cari . "%' OR nama_barang LIKE '%" . $cari . "%' OR kategori LIKE '%" . $cari . "%'";
    $search = mysqli_query($barang, $query);
} else {
    $query = "SELECT * FROM toko_barokah";
    $search = mysqli_query($barang, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>SEARCHING</title>
</head>
<body>
	
		<form action="" method="post">
			<input type="text" name="keywoard" size="70" autofocus placeholder="Masukkan keywoard Yang Ingin Dicari..." autocomplete="off">
			<button type="submit" name="cari"> Cari!</button>
			<br><br>
		</form>


	<table border="1px">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Jumlah Stok</th>
                    <th>Harga Satuan</th>
                </tr>

                <?php while ($barang = mysqli_fetch_array($search)) : ?>
                    <tr>
                        <td><?php echo $barang['kode_barang']; ?></td>
                        <td><?php echo $barang['nama_barang']; ?></td>
                        <td><?php echo $barang['kategori']; ?></td>
                        <td><?php echo $barang['jumlah_stok']; ?></td>
                        <td><?php echo $barang['harga_satuan']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
</body>
</html>