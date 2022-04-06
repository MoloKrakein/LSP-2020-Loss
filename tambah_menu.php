<?php
include("koneksi.php");
$koki = $_POST['koki'];
$nama = $_POST['nama'];
$angka = $_POST['angka'];

mysqli_query($db,"INSERT INTO `menu`(`id_koki`, `nama_masakan`, `Harga`) VALUES ('$koki','$','1')");
header("location: menu.php");
echo($koki);
echo($nama);
echo($angka);

?>