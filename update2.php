<?php

$nim = $_POST['nim'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$pilih_semester = $_POST['pilih_semester'];
$pilih_jurusan = $_POST['pilih_jurusan'];
$jumlah = $_POST['jumlah'];
$email = $_POST['email'];

include "koneksi.php";
$qry = "UPDATE pembayaran SET 
    nama_mahasiswa = '$nama_mahasiswa',
    semester = '$pilih_semester',
    kode_jurusan = '$pilih_jurusan',
    jumlah = '$jumlah',
    email = '$email'
    WHERE nim = '$nim'
    "; 

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil diupdate'); window.location = 'tabel2.php';</script>";
}else{
    echo "Data gagal diupdate";
}