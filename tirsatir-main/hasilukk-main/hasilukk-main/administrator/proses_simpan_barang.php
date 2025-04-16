<?php
// koneksi database

include '../koneksi.php';

// menangkap data yang di kirim dari form
$NamaProduk = $_POST['NamaProduk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$KodeBarang = $_POST['KodeBarang'];

// menginput data ke database
mysqli_query($koneksi,"insert into produk 
values('','$NamaProduk','$Harga','$Stok','$KodeBarang')");

// mengalihkan halaman kembali ke data_barang.php
header("location:data_barang.php?pesan=simpan");
?>