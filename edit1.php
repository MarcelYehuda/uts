<Link rel="stylesheet" href="style_tabel.css">
<?php
    $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "SELECT * FROM ormawa WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    
?>
    <form action="update1.php" method="POST">
        <fieldset>
            <legend>Pilih Jenis ORMAWA</legend>
            <h2>Pendaftaran ORMAWA</h2>
            <table>
                    <tr>
                        <td><label for="nim">Masukan NIM:</label></td>
                        <td><input type="text" name="nim" id="nim" readonly = 'true' value = "<?php echo $data['nim'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="nama_mahasiswa">Nama Mahasiswa:</label></td>
                        <td><input type="text" name="nama_mahasiswa" value = "<?php echo $data['nama_mahasiswa'] ?>"></td>
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
                        <td><label for="no_hp">No HP:</label></td>
                        <td><input type="number" name="no_hp" value = "<?php echo $data['no_hp'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email :</label></td>
                        <td><input type="email" name="email" value = "<?php echo $data['email'] ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="alasan">Alasan:</label></td>
                        <td><input type="alasan" name="alasan" value = "<?php echo $data['alasan'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td><td><input type="submit" value="Simpan">
                        <input type="submit" value="Kembali"></td>
                    </tr>
            </table>
        </fieldset>
    </form>