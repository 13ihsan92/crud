<?php
include 'conf/koneksi.php';

$sql=mysqli_query($con, "INSERT INTO barang (nama,id_kategori,deskripsi,jumlah)
                        values ('$_POST[nama]','$_POST[id_kategori]','$_POST[deskripsi]','$_POST[jumlah]')");
    if (sql) {
      header('location:index.php')
    }
    else {
      echo "Data Gagal Disimpan";
    }
)

?>
