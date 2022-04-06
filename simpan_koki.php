<?php
include("koneksi.php");
$id = $_POST['idk'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
mysqli_query($db,"INSERT INTO `makanan`(`id_koki`, `nama_masakan`, `Harga`) VALUES ('$id','$nama','$harga')");

// header("location: menu.php");
echo $id;
echo $nama;
echo $harga;

?>