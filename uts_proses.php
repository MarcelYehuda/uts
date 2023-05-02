<?php 

$nim = $_POST['nim'];
$nama_pendaftar = $_POST['nama_pendaftar'];
$nama_ukm = $_POST['nama_ukm'];
$jadipengurus = $_POST['jadipengurus']; 
$alasan = $_POST['alasan']; 
$nomor_kontak = $_POST['nomor_kontak']; 

include "koneksi.php"; 

$qry = "INSERT INTO daftar_ukm VALUES(
     '$nim','$nama_pendaftar','$nama_ukm','$jadipengurus','$alasan','$nomor_kontak'
)";

$exect = mysqli_query($con,$qry);

if($exect){
     echo "<script>alert('data berhasil disimpan'); window.location = 'uts_main.php';</script>";
}else{
     echo "Data gagal disimpan";
}

?>