<?php
include ("koneksi.php");
if(!isset($_GET['id_penyewa'])){
    header("location:tampil.php?");
}
$kode = $_GET['id_penyewa'];
$sql = "SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd WHERE tb_penyewa.id_penyewa='$kode'";
$query = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) > 1){
     die ("DATA TIDAK DITEMUKAN");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Edit</h2>
    <a href="tampil.php"><input type="button" value="Kembali"></a>
    <form action="proses-edit.php" method="POST">
        <p>
        <input type="hidden" name="id_penyewa" value="<?php echo $row['id_penyewa']?>" />
        </p>
    <p>
            <label for="nama_penyewa">Nama Penyewa :</label>
            <input type="text" name="nama_penyewa" value="<?php echo $row['nama_penyewa']?>" />
        </p>
        <p>
            <label for="alamat">Alamat :</label>
            <input type="text" name="alamat"  value="<?php echo $row['alamat']?>"/>
        </p>
        <p>
            <label for="genre_film">Genre Film :</label>
            <input type="text" name="genre_film" value="<?php echo $row['genre_film']?>" />
        </p>
        <p>
            <label for="judul_film">Judul Film :</label>
            <input type="text" name="judul_film" value="<?php echo $row['judul_film']?>"/>
        </p>
        <p>
            <label for="tahun_film">Tahun Film :</label>
            <input type="number" name="tahun_film" value="<?php echo $row['tahun_film']?>"/>
        </p>
        <p>
            <label for="tanggal_sewa">Tanggal Sewa :</label>
            <input type="date" name="tanggal_sewa" value="<?php echo $row['tanggal_sewa']?>"/>
        </p>
        <p>
            <label for="tanggal_kembali">Tanggal Kembali :</label>
            <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>"/>
        </p>
        <p>
            <label for="harga">Harga :</label>
            <input type="number" name="harga" value="<?php echo $row['harga']?>"/>
        </p>
        <p>
            <input type="submit" value="Edit" name="edit"/>
        </p>
    </form>
</body>
</html>