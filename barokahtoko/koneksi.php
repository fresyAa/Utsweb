<?php

$server = "localhost";//server database
$user = "root";//user database
$password = "";//password databasae
$nama_database = "phputs";//nama database

$db = mysqli_connect($server, $user, $password, $nama_database);
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
