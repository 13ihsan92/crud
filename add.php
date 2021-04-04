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
  <div class="container">
    <h2>Form Data Barang</h2>
    <form class="form-group" action="simpan.php" method="post">
      <label for="nama">Nama Barang</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang">
      <label for="kategori">Kategori Barang</label>
      <select class="form-control" id="kategori" name="id_kategori">
        <?php
          include 'conf/koneksi.php';
          $sql=mysqli_query($con, "SELECT * FROM kategori");
          while ($r=mysqli_fetch_array($sql)) {
            echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
          }
        ?>
      </select>
      <label for="comment">Deskripsi</label>
      <textarea class="form-control" rows="5" id="comment" name="deskripsi"></textarea>
      <label for="jumlah">Jumlah Barang</label>
      <input type="text" class="form-control" id="jumlah" placeholder="Masukkan Kode Barang" name="jumlah" value="">
      <button type="submit" class="btn btn-light">Simpan</button>
    </form>
  </div>
</body>
</html>
