<?php
include 'koneksi.php';
extract($_POST);

mysqli_query($koneksi, "INSERT INTO buku_perpustakaan (judul, penulis, tahun_terbit, penerbit) values ('$judul','$penulis','$tahun_terbit','$penerbit')");

header('Location:index.php');



?>