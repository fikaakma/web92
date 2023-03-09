<?php
include("koneksi.php");
if(isset($_POST['edit'])) {
    $id = $_POST['kodebarang'];
    $namabarang=$_POST['namabarang'];
    $hargajual=$_POST['hargajual'];
    $hargabeli=$_POST['hargabeli'];
    $satuan=$_POST['satuan'];
    $kategori=$_POST['kategori'];
    $nofaktur=$_POST['nofaktur'];
    $namakonsumen=$_POST['namakonsumen'];
    $jumlah=$_POST['jumlah'];
    $hargasatuan=$_POST['hargasatuan'];
    $hargatotal=$_POST['hargatotal'];

    $sql = "UPDATE tb_penjualan SET namabarang='$namabarang',hargajual='$hargajual', hargabeli='$hargabeli',
    satuan='$satuan', kategori='$kategori' WHERE kodebarang='$id'";
    $query = mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_master SET  nofaktur='$nofaktur',namakonsumen='$namakonsumen', jumlah='$jumlah',
    hargasatuan='$hargasatuan', hargatotal='$hargatotal' WHERE kodebarang='$id'";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>