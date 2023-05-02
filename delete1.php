<?php

$nim = $_GET['nim'];

include "koneksi.php";
$qry = "DELETE FROM ormawa WHERE nim = '$nim'"; 

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'tabel1.php';</script>";
}else{
    echo "Data gagal dihapus";
}