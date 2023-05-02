<?php

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$pilih_ormawa = $_POST['pilih_ormawa'];
$pilih_jurusan = $_POST['pilih_jurusan'];
$gender = $_POST['gender'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alasan = $_POST['alasan'];

include "koneksi.php";
$qry = "UPDATE ormawa SET 
    nama_mahasiswa = '$nama_mahasiswa',
    kode_ormawa = '$pilih_ormawa',
    kode_jurusan = '$pilih_jurusan',
    gender = '$gender',
    no_hp = '$no_hp',
    email = '$email',
    alasan = '$alasan'
    WHERE nim = '$nim'
    "; 

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'tabel1.php';</script>";
}else{
    echo "Data gagal diupdate";
}