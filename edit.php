<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>
    <div class="container">
        <h3>Edit Data</h3>
        <form action="update.php" method="POST">
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data =  mysqli_query($koneksi, "SELECT * FROM buku_perpustakaan where id='$id'");
            while($item = mysqli_fetch_array($data))
            {
        ?>
            <div class="form-group">
                <label for="input1">ID</label>
                <input type="text" class="form-control" id="input1" name="id" value="<?php echo $item['id'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="input1">Judul</label>
                <input type="text" class="form-control" id="input1" name="judul" value="<?php echo $item['judul'] ?>">
            </div>
            <div class="form-group">
                <label for="input1">Penulis</label>
                <input type="text" class="form-control" id="input1" name="penulis" value="<?php echo $item['penulis'] ?>">
            </div>
            <div class="form-group">
                <label for="input1">Tahun Terbit</label>
                <input type="text" class="form-control" id="input1" name="tahun_terbit" value="<?php echo $item['tahun_terbit'] ?>">
            </div>
            <div class="form-group">
                <label for="input1">Penerbit</label>
                <input type="text" class="form-control" id="input1" name="penerbit" value="<?php echo $item['penerbit'] ?>">
            </div>
            <?php
            }
            ?>
            <button class="btn btn-info" type="submit">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>