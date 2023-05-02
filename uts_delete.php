<?php

$nim = $_GET['nim'];

include "koneksi.php";
$qry = "DELETE FROM daftar_ukm WHERE nim = '$nim'"; 

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'uts_main.php';</script>";
}else{
    echo "Data gagal dihapus";
}