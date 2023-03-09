<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <table border="0">
        <form action="proses-tambah.php" method="POST">
    <h2>Tambah Barang</h2>
    <p>
            <label for="namabarang"> Nama Barang :</label>
            <label><input type="text" name="namabarang" /></label>
</p>
<p>
            <label for="hargajual"> Harga Jual :</label>
            <label><input type="text" name="hargajual" /></label>
</p>
<p>
            <label for="hargabeli"> Harga Beli :</label>
            <label><input type="text" name="hargabeli" /></label>
</p>
<p>
            <label for="satuan"> Satuan :</label>
            <label><input type="number" name="satuan" /></label>
</p>
<p>
            <label for="kategori"> Kategori :</label>
            <label><input type="text" name="kategori" /></label>
</p>
<p>
            <label for="nofaktur"> No Faktur :</label>
            <label><input type="number" name="nofaktur" /></label>
</p>
<p>
            <label for="namakonsumen"> Nama Konsumen :</label>
            <label><input type="text" name="namakonsumen" /></label>
</p>
<p>
            <label for="jumlah"> Jumlah :</label>
            <label><input type="number" name="jumlah" /></label>
</p>
<p>
            <label for="hargasatuan"> Harga Satuan :</label>
            <label><input type="text" name="hargasatuan" /></label>
</p>
<p>
            <label for="hargatotal"> Harga Total :</label>
            <label><input type="text" name="hargatotal" /></label>
</p>
<input type="submit" name="submit" value="submit">
</body>
</html>