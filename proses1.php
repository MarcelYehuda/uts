<?php

$nim = $_POST['nim'];
$masukan_nama_mahasiswa = $_POST['masukan_nama_mahasiswa'];
$pilih_ormawa = $_POST['pilih_ormawa'];
$pilih_jurusan = $_POST['pilih_jurusan'];
$gender = $_POST['gender'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alasan = $_POST['alasan'];

include "koneksi.php";
$qry = "INSERT INTO ormawa VALUES (
    '$nim', '$masukan_nama_mahasiswa','$pilih_ormawa', '$pilih_jurusan', '$gender', '$no_hp', '$email', '$alasan'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'tabel1.php';</script>";
}else{
    echo "Data gagal di simpan";
}