<Link rel="stylesheet" href="style_tabel.css">
<?php
    $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "SELECT * FROM pembayaran WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    
?>
    <form action="update2.php" method="POST">
        <fieldset>
            <legend>Pembayaran Semester</legend>
            <h2>Pendataan Pembayaran Semester</h2>
            <table>
                <tr>
                    <td><label for="nim">Masukan NIM:</label></td>
                    <td><input type="text" name="nim" id="nim" readonly = 'true' value = "<?php echo $data['nim'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="nama_mahasiswa">Masukan Nama Lengkap Mahasiswa:</label></td>
                    <td><input type="text" name="nama_mahasiswa" id="nama_mahasiswa" value = "<?php echo $data['nama_mahasiswa'] ?>"></td>
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
                    <td><input type="number" name="jumlah" id="jumlah" readonly = 'true' value = "<?php echo $data['jumlah'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="email" name="email" id="email" value = "<?php echo $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td></td><td><input type="submit" value="Simpan">
                    <input type="submit" value="Kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>