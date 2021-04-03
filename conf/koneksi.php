<?php
$con=mysqli_connect("localhost","root","","penjualan");

if ($con) {
	echo "koneksi berhasil";
} 
else {
	echo "koneksi gagal terhubung";
}

?>