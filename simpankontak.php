<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id             =$_POST['id'];
$nama           =$_POST['nama'];
$email          =$_POST['email'];
$jenis_kelamin  =$_POST['jkel'];
$alamat         =$_POST['alamat'];
$kota           =$_POST['kota'];
$pesan          =$_POST['pesan'];
// query SQL untuk insert data
$query="INSERT INTO kontak SET id='$id', nama='$nama', email='$email', jkel='
$jenis_kelamin', alamat='$alamat', kota='$kota', pesan='$pesan'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:tampilkontak.php");
?>