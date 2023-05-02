<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan</title>
</head>
<style>
    select {
        background-color: gray;
    }

    button {
        background-color: aqua;
    }
    legend {
        font-style: italic;
    }

    table, th, td {
        border: 1px solid black;
    }

</style>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend>Form Input Biodata Mahasiswa</legend>
            <h3>Lengkapi Biodata Dengan Benar</h3>
                <table>
                    <tr>
                        <td><label for="NIM">NIM:</label></td>
                        <td><input type="text" name="nim" id="nim"></td>
                    </tr>
                    <tr>
                        <td><label for="nama_mahasiswa">Nama Mahasiswa:</label></td>
                        <td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa"></td>
                    </tr>
                    <tr>
                        <td><label for="jurusan">Jurusan:</label></td>
                        <td><select name="jurusan" id="jurusan">
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
                        <td><label for="alamat">Alamat:</label></td>
                        <td><input type="text" name="alamat" id="alamat"></td>
                    </tr>
                    <tr>
                        <td><label for="no_hp">No HP:</label></td>
                        <td><input type="number" name="no_hp" id="no_hp"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="email" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="Simpan">
                        <input type="submit" value="Kembali"></td>
                    </tr>
            </table>
        </fieldset>
    </form>
    <table style="background-color: gray;">
        <tr>
            <td>NIM</td>
            <td>Nama Mahasiswa</td>
            <td>Jurusan</td>
            <td>Gender</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Email</td>
            <td>Act</td>
        </tr>
        <?php
            include "koneksi.php";
            $qry = "SELECT * FROM mahasiswa";
            $exec = mysqli_query($con, $qry);

            while($data = mysqli_fetch_assoc($exec)){
                
            
        ?>
        <tr>
            <td><?php echo $data['nim'] ?></td> 
            <td><?php echo $data['nama_mahasiswa'] ?></td>
            <td><?php echo $data['kode_jurusan'] ?></td>
            <td><?php echo $data['gender'] == 1 ? "laki-laki" : "Perempuan" ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['no_hp'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td>
                <a href="edit.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a>
                <a href="delete.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>