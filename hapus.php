<?php
include ("koneksi.php");


$id = $_GET['kodebarang'];
$sql = "DELETE FROM tb_master WHERE kodebarang='$id'";
$sql = "DELETE FROM tb_penjualan WHERE kodebarang='$id'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>