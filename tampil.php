<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
    <h2>Tabel Barang</h2>
    <a href ="tambah.php"><input type="button" value="tambah"></a>
    <table border = "1">
        <tr>
            <th>No </th>
            <th>Nama Barang</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Satuan</th>
            <th>Kategori</th>
            <th>No Faktur</th>
            <th>Nama Konsumen</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Harga Total</th>
            <th>Aksi</th>
</tr>

<?php
include "koneksi.php";
$query =mysqli_query($koneksi, "SELECT * FROM tb_master INNER JOIN tb_penjualan
ON  tb_master.kodebarang=tb_penjualan.kodebarang");

$no= 1;
foreach($query as $row):
?>

<tr>
        <td><?= $no++; ?></td>
        <td><?= $row['namabarang']; ?></td>
        <td><?= $row['hargajual']; ?></td>
        <td><?= $row['hargabeli']; ?></td>
        <td><?= $row['satuan']; ?></td>
        <td><?= $row['kategori']; ?></td>
        <td><?= $row['nofaktur']; ?></td>
        <td><?= $row['namakonsumen']; ?></td>
        <td><?= $row['jumlah']; ?></td>
        <td><?= $row['hargasatuan']; ?></td>
        <td><?= $row['hargatotal']; ?></td>
<td>
    <a href="edit.php?kodebarang=<?= $row['id']; ?>">Edit</a> |
    <a href="hapus.php?kodebarang=<?= $row['id']; ?>">Hapus</a> 
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>