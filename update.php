<?php

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$jurusan = $_POST['jurusan'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include "koneksi.php";
$qry = "UPDATE mahasiswa SET 
    nama_mahasiswa = '$nama_mahasiswa',
    kode_jurusan = '$jurusan',
    gender = '$gender',
    alamat = '$alamat',
    no_hp = '$no_hp',
    email = '$email'
    WHERE nim = '$nim'
    "; 

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'latihan.php';</script>";
}else{
    echo "Data gagal diupdate";
}