<?php

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "koneksi.php";
$qry = "INSERT INTO mahasiswa VALUES (
    '$nim', '$nama_mahasiswa', '$jurusan', '$gender', '$alamat', '$no_hp', '$email' 
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal di simpan";
}