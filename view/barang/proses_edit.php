<?php
$id_barang=$_GET['id_barang'];
$id_jenis=$_POST['id_jenis'];
$stok=$_GET['stok'];
$harga=$_GET['harga'];
$nama_barang=$_POST['nama_barang'];

include '../../config/koneksi.php';

$query=mysqli_query($conn,"UPDATE barang SET nama_barang='$nama_barang'
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('data berjaya diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>