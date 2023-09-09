<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$jnskelamin = $_POST['jenis_kelamin'];
$tglLahir = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', nisn='$nisn', alamat='$alamat', jenis_kelamin='$jnskelamin', tanggal_lahir='$tglLahir', jurusan='$jurusan' where id='$id' ");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>