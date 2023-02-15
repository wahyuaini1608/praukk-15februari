<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<center>
<h2>Pendataan dan Penyewaan DVD</h2>
<a href="index.php"><input type="button" value = "Kembali"></a>
<a href="tambah.php"><input type="button" value = "Tambah"></a>
<body>
    <table border = "1">
    <tr>
    <th>NO</th>
    <th>Nama Penyewa</th>
    <th>Alamat</th>
    <th>Genre Film</th>
    <th>Judul Film</th>
    <th>Tahun Film</th>
    <th>Tanggal Sewa</th>
    <th>Tanggal Kembali</th>
    <th>Harga</th>
    <th>Aksi</th>
    </tr>

    <?php
    include ("koneksi.php");
    $query = mysqli_query($koneksi, "SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd = tb_dvd.id_dvd");
    $no = 1;
    foreach ($query as $row):
    ?>
    <tr>
    <td><?=$no++;?></td>
    <td><?=$row['nama_penyewa']; ?></td>
    <td><?=$row['alamat']; ?></td>
    <td><?=$row['genre_film']; ?></td>
    <td><?=$row['judul_film']; ?></td>
    <td><?=$row['tahun_film']; ?></td>
    <td><?=$row['tanggal_sewa']; ?></td>
    <td><?=$row['tanggal_kembali']; ?></td>
    <td><?=$row['harga']; ?></td>
    <td>
        <a href="edit.php?id_penyewa=<?=$row['id_penyewa'];?>">Edit</a>||
        <a href="hapus.php?id_penyewa=<?=$row['id_penyewa'];?>">Hapus</a>
    </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</center>
</html>