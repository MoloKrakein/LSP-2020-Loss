<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>RestoApp</title>
</head>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Resto APPX</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="index.php">Home<span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="menu.php">Menu</a>
      <a class="nav-item nav-link" href="koki.php">Koki</a>
    </div>
  </div>
</nav>
<div class="alert alert-primary" role="alert">

  <body class="bg-dark">
    <center>
      <p class="h1">Menu Makanan</p>
    </center>
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID</th>
          <th scope="col">Koki</th>
          <th scope="col">Nama Makanan</th>
          <th scope="col">Harga</th>
          <th scope="col"><a href="form_tambah_menu.php"><button type="button" class="btn btn-success">Tambah</button></a></th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("koneksi.php");
        $tampil = mysqli_query($db, "SELECT * FROM `menu` a, koki b WHERE a.id_koki = b.id_koki");
        $nomer = 0;
        while ($data = mysqli_fetch_array($tampil)) {
          $nomer++
        ?>
          <tr>
            <th scope="row"><?php echo $nomer ?></th>
            <td><?php echo $data['id_makanan'] ?></td>
            <td><?php echo $data['nama_koki'] ?></td>
            <td><?php echo $data['nama_masakan'] ?></td>
            <td><?php echo $data['Harga'] ?></td>
            <td><a href="form_edit_menu.php?id=<?php echo $data['id_makanan']?>"><button type="button" class="btn btn-warning">Edit</button></a>
              <a href="hapus_menu.php?id=<?php echo $data['id_makanan']?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</div>

</html>