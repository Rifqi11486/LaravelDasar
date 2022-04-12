<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Halaman Utama</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <h3>Halaman Index</h3>
        <a href="tambah.php" class="btn btn-success">Tambah Data Buku</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM buku_perpustakaan");
                    while($item = mysqli_fetch_array($data))
                    {
                ?>
                <tr>
                    <th scope="row"><?php echo $item['id'] ?></th>
                    <td><?php echo $item['judul'] ?></td>
                    <td><?php echo $item['penulis'] ?></td>
                    <td><?php echo $item['tahun_terbit'] ?></td>
                    <td><?php echo $item['penerbit'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $item['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $item['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>