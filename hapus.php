<?php
include ("koneksi.php");
$kode = $_GET['id_penyewa'];

$sql = "DELETE FROM tb_penyewa WHERE id_penyewa='$kode'";
$query = mysqli_query($koneksi, $sql);

$sql = "DELETE FROM tb_dvd WHERE id_dvd='$kode'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?SUKSES');
}else{
    header('location:tampil.php?GAGAL');
}
?>