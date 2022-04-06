<?php
include("koneksi.php");
?>
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
      <p class="h1">Tambah Menu</p>
    </center>
  <form method = "POST" action="simpan_koki.php">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Masakan</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama Masakan">
      </div>
      <div class="form-group">
          <label for="exampleFormControlSelect1">Juru Masak</label>
          <select name="idk" class="form-control" id="exampleFormControlSelect1">
              <?php
              $querykoki = mysqli_query($db,"SELECT * FROM `makanan` a, koki b WHERE a.id_koki = b.id_koki ");
              while ($datak = mysqli_fetch_array($querykoki)) {
              ?>
          <option value="<?php echo $datak['id_koki']?>"><?php echo $datak['nama_koki']?></option>
          <?php
              }
          ?>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Harga Masakan</label>
          <input type="number" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Harga">
        </div>
        <th scope="col"><a href="tambah_menu.php"><button type="button" class="btn btn-primary">Tambah</button></a></th>
        <th scope="col"><a href="#"><button type="button" class="btn btn-danger">Batal</button></a></th>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</div>
</html>