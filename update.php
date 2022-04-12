<?php
extract($_POST);
include 'koneksi.php';
mysqli_query($koneksi, "UPDATE buku_perpustakaan SET judul='$judul', penulis='$penulis',tahun_terbit='$tahun_terbit',penerbit='$penerbit' WHERE id='$id'");

header('Location:index.php');
?>