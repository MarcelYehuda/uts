<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link rel="stylesheet" href="style_tabel.css">
</head>
<body>
    <form action="proses1.php" method="POST">
        <fieldset>
            <legend>Pilih Jenis ORMAWA</legend>
            <h2>Pendaftaran ORMAWA</h2>
            <table>
                <tr>
                    <td><label for="nim">Masukan NIM:</label></td>
                    <td><input type="text" name="nim" id="nim" placeholder="Masukan NIM"></td>
                </tr>
                <tr>
                    <td><label for="masukan_nama_mahasiswa">Masukan Nama Mahasiswa:</label></td>
                    <td><input type="text" name="masukan_nama_mahasiswa" id="masukan_nama_mahasiswa" placeholder="Masukan Nama"></td>
                </tr>
                <tr>
                    <td><label for="pilih_ormawa">Pilih ORMAWA:</label></td>
                    <td><select name="pilih_ormawa" id="pilih_ormawa">
                        <option value="01">BEM</option>
                        <option value="02">BALMA</option>
                        <option value="03">HIMAPRODI</option></td>
                    </select>
                </tr>
                <tr>
                    <td><label for="pilih_jurusan">Pilih Jurusan:</label></td>
                    <td><select name="pilih_jurusan" id="pilih_jurusan">
                        <option value="001">Sistem Informasi</option>
                        <option value="002">Teknologi Informasi</option>
                        <option value="003">Sistem Komputer</option>
                        <option value="004">Bisnis Digital</option></td>
                    </select>
                </tr>
                <tr>
                    <td><label for="gender">Jenis Kelamin :</label></td>
                    <td><input type="radio" name="gender" id="gender" value="1">Laki-Laki
                    <input type="radio" name="gender" id="gender" value="2">Perempuan </td>
                </tr>
                <tr>
                    <td><label for="no_hp">No HP:</label></td>
                    <td><input type="number" name="no_hp" id="no_hp" placeholder="No Handphone"></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td><label for="alasan">Alasan Memilih ORMAWA Tersebut:</label></td>
                    <td><input type="text" name="alasan" id="alasan" placeholder="Ketik alasan memilih.."></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="Simpan">
                    <input type="submit" value="Kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <h2 style="font-style: italic;">Data Pendaftar ORMAWA</h2>
    <table style="border: 1px solid black; width: 100%; border-collapse: collapse">
        <tr>
            <td>NIM</td>
            <td>Nama Mahasiswa</td>
            <td>ORMAWA</td>
            <td>Jurusan</td>
            <td>Gender</td>
            <td>No HP</td>
            <td>Email</td>
            <td>Alasan</td>
            <td>Act</td>
        </tr>
        <?php
            include "koneksi.php";
            $qry = "SELECT * FROM ormawa";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){
                    
                
        ?>
        <tr>
            <td><?php echo $data['nim'] ?></td> 
            <td><?php echo $data['nama_mahasiswa'] ?></td>
            <td><?php echo $data['kode_ormawa'] ?></td>
            <td><?php echo $data['kode_jurusan'] ?></td>
            <td><?php echo $data['gender'] == 1 ? "laki-laki" : "Perempuan" ?></td>
            <td><?php echo $data['no_hp'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['alasan'] ?></td>
            <td>
                <a href="edit1.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a>
                <a href="delete1.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>