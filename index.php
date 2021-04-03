<!DOCTYPE html>
<html>
<head>
	<title>Tampil Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<sqript type="text/javascript" src="jquery.js"></sqript>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<<?php 
	include 'conf/koneksi.php';
	$tampil=mysqli_query($con,"SELECT * FROM barang");

?>

<div class="container">
	<h2>Tampil Data Barang</h2>
	<p>Ini adalah data-data barang:</p>
	<a href="add.php">
		<button type="button" class="btn btn-dark">Tambah Data</button>
	</a>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Kategori</th>
				<th>Deskripsi</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				$no=1;
				while($r=mysqli_fetch_array($tampil)) {
					echo 
						"<tr><td>$no</td>
						<td>$r[kd_barang]</td>
						<td>$r[nama]</td>";

					$datakategori=mysqli_query($con,"SELECT * FROM Kategori WHERE id_kategori='$r[id_kategori]'");
					$r2=mysqli_fetch_array($datakategori);

					echo 
						"<td>$r2[nama_kategori]</td>
						<td>$r[deskripsi]</td>
						<td>$r[id_kategori]
						<button type='button' class='btn btn-primary'>Edit</button>
						<button type='button' class='btn btn-danger'>Hapus</button>
						</td></tr>";
					$no++;
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>