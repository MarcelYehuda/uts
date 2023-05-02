<?php

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$pilih_semester = $_POST['pilih_semester'];
$pilih_jurusan = $_POST['pilih_jurusan'];
$jumlah = $_POST['jumlah'];
$email = $_POST['email'];

include "koneksi.php";
$qry = "INSERT INTO pembayaran VALUES (
    '$nim', '$nama_mahasiswa','$pilih_semester', '$pilih_jurusan', '$jumlah', '$email'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil disimpan'); window.location = 'tabel2.php';</script>";
}else{
    echo "Data gagal di simpan";
}