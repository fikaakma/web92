<?php
include("koneksi.php");

if(!isset($_GET['kodebarang']) ){
    header('Location:tampil.php');
}


$id = $_GET['kodebarang'];
$sql = "SELECT * FROM tb_penjualan INNER JOIN tb_master ON tb_penjualan.kodebarang= tb_master.kodebarang
WHERE tb_penjualan.kodebarang='$id'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>

        <h2>Edit Data Barang</h2>
        <form action="proses-edit.php" method="POST">
            <table border= "0">
                <tr>
                    <td><input type="hidden" name="kodebarang" value="<?php echo $data['kodebarang']?>" /></td>
</tr>
<tr>
    <td><label for ="namabarang">Nama Barang :</label></td>
    <td><input type ="text" name="namabarang" value="<?php echo $data['namabarang']?>"/></td>
</tr> 
<tr>
    <td><label for ="hargajual">Harga Jual :</label></td>
    <td><input type ="text" name="hargajual" value="<?php echo $data['hargajual']?>"/></td>
</tr> 
<tr>
    <td><label for ="hargabeli">Harga Beli:</label></td>
    <td><input type ="text" name="hargabeli" value="<?php echo $data['hargabeli']?>"/></td>
</tr> 
<tr>
    <td><label for ="satuan">Satuan :</label></td>
    <td><input type ="number" name="satuan" value="<?php echo $data['satuan']?>"/></td>
</tr> 
<tr>
    <td><label for ="kategori">Kategori :</label></td>
    <td><input type ="text" name="kategori" value="<?php echo $data['kategori']?>"/></td>
</tr> 
<tr>
    <td><label for ="nofaktur">No Faktur :</label></td>
    <td><input type ="number" name="nofaktur" value="<?php echo $data['nofaktur']?>"/></td>
</tr> 
<tr>
    <td><label for ="namakonsumen">Nama Konsumen :</label></td>
    <td><input type ="text" name="namakonsumen" value="<?php echo $data['namakonsumen']?>"/></td>
</tr> 
<tr>
    <td><label for ="jumlah">Jumlah :</label></td>
    <td><input type ="text" name="jumlah" value="<?php echo $data['jumlah']?>"/></td>
</tr>
<tr>
    <td><label for ="hargasatuan">Harga Satuan :</label></td>
    <td><input type ="text" name="hargasatuan" value="<?php echo $data['hargasatuan']?>"/></td>
</tr> 
<tr>
    <td><label for ="hargatotal">Harga Total :</label></td>
    <td><input type ="text" name="hargatotal" value="<?php echo $data['hargatotal']?>"/></td>
</tr>

</form>
</table>
<p>
    <td><input type="submit" name="edit" value="edit"></a></td>
</p>

</body>
</html>