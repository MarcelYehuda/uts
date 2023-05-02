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
    <form action="proses2.php" method="POST">
        <fieldset>
            <legend>Pembayaran Semester</legend>
            <h2>Pendataan Pembayaran Semester</h2>
            <table>
                <tr>
                    <td><label for="nim">Masukan NIM:</label></td>
                    <td><input type="text" name="nim" id="nim" placeholder="Masukan NIM"></td>
                </tr>
                <tr>
                    <td><label for="nama_mahasiswa">Masukan Nama Lengkap Mahasiswa:</label></td>
                    <td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Masukan Nama"></td>
                </tr>
                <tr>
                    <td><label for="pilih_semster">Pilih Semster:</label></td>
                    <td><select name="pilih_semester" id="pilih_semester">
                        <option value="01">I</option>
                        <option value="02">II</option>
                        <option value="03">III</option>
                        <option value="04">IV</option>
                        <option value="05">V</option>
                        <option value="06">VI</option>
                        <option value="07">VII</option>
                        <option value="08">VIII</option>
                        <option value="09">IX</option>
                        <option value="10">X</option></td>
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
                    <td><label for="jumlah">Masukan Jumlah Uang:</label></td>
                    <td><input type="number" name="jumlah" id="jumlah" placeholder="Masukan Jumlah Uang"></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" name="email" id="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="Simpan">
                    <input type="submit" value="Kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <h2 style="font-style: italic;">Data Pembayaran Semester</h2>
    <table style="border: 1px solid black; width: 100%; border-collapse: collapse">
        <tr>
            <td>NIM</td>
            <td>Nama Lengkap Mahasiswa</td>
            <td>Semester</td>
            <td>Jurusan</td>
            <td>Jumlah Uang</td>
            <td>Email</td>
            <td>Act</td>
        </tr>
        <?php
            include "koneksi.php";
            $qry = "SELECT * FROM pembayaran";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){
                    
                
        ?>
        <tr>
            <td><?php echo $data['nim'] ?></td> 
            <td><?php echo $data['nama_mahasiswa'] ?></td>
            <td><?php echo $data['semester'] ?></td>
            <td><?php echo $data['kode_jurusan'] ?></td>
            <td><?php echo $data['jumlah'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td>
                <a href="edit2.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a>
                <a href="delete2.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>