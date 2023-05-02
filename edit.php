<?php
    $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    
?>

<form action="update.php" method="POST">
        <fieldset>
            <legend>Form Edit Biodata Mahasiswa</legend>
            <h3>Lengkapi Biodata Dengan Benar</h3>
                <table>
                    <tr>
                        <td><label for="NIM">NIM:</label></td>
                        <td><input type="text" name="nim" readonly = 'true' value = "<?php echo $data['nim'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="nama_mahasiswa">Nama Mahasiswa:</label></td>
                        <td><input type="text" name="nama_mahasiswa" value = "<?php echo $data['nama_mahasiswa'] ?>"></td>
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
                        <td>
                            <?php
                                if($data['gender'] == 1) {
                            ?>
                                <input type="radio" name="gender" value="1" checked> laki-laki 
                                <input type="radio" name="gender" value="2"> Perempuan
                            <?php } else {?>
                                <input type="radio" name="gender" value="1"> laki-laki 
                                <input type="radio" name="gender" value="2" checked> Perempuan
                            <?php } ?>    

                        </td>
                    </tr>
                    <tr>
                        <td><label for="alamat">Alamat:</label></td>
                        <td><input type="text" name="alamat" value = "<?php echo $data['gender'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="no_hp">No HP:</label></td>
                        <td><input type="number" name="no_hp" value = "<?php echo $data['no_hp'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="email" name="email" value = "<?php echo $data['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="Simpan">
                        <input type="submit" value="Kembali"></td>
                    </tr>
            </table>
        </fieldset>
    </form>