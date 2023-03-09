<?php
include("koneksi.php");
if(isset($_POST['submit'])){
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

  $sql = "INSERT INTO tb_master(namabarang,hargajual,hargabeli,satuan,kategori)
  VALUES('$namabarang','$hargajual','$hargabeli','$satuan','$kategori')";
  $query = mysqli_query($koneksi, $sql);

  $sql="SELECT max(kodebarang)AS barangkode FROM tb_master LIMIT 1";
  $query=mysqli_query($koneksi, $sql);

  $data=mysqli_fetch_array($query);
  $barangkode=$data['barangkode'];

  $sql="INSERT INTO tb_penjualan(kodebarang,nofaktur,namakonsumen,jumlah,hargasatuan,hargatotal)
  VALUES('$barangkode','$nofaktur','$namakonsumen','$jumlah','$hargasatuan','$hargatotal')";
  $query=mysqli_query($koneksi, $sql);

  if($query){
    header('location:tampil.php?status=sukses');
  }else{
    header('location:tampil.php?status=gagal');
  }
}
?>