<?php

$nim = $_POST['nim'];
$nama_pendaftar = $_POST['nama_pendaftar'];
$nama_ukm = $_POST['nama_ukm'];
$jadipengurus = $_POST['jadipengurus']; 
$alasan = $_POST['alasan']; 
$nomor_kontak = $_POST['nomor_kontak']; 

include "koneksi.php"; 

$query = "UPDATE daftar_ukm SET
         nim = '$nim',
         nama_pendaftar = '$nama_pendaftar',
         nama_ukm = '$nama_ukm',
         jadipengurus = '$jadipengurus',
         alasan = '$alasan',
         nomor_kontak = '$nomor_kontak'
         "; 

$exec = mysqli_query($con,$query);

if($exec){
     echo "<script>alert('Data berhasil di update'); window.location = 'uts_main.php';</script>";
 }else{
     echo "Data gagal di simpan";
 }