<Link rel="stylesheet" href="style_main.css">
<?php

    $nim = $_GET['nim'];
    include "koneksi.php";
    $qry = "SELECT * FROM daftar_ukm WHERE nim = '$nim'";
    $exec = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($exec);

    
?>

<form action="uts_update.php" method="POST" >

          <fieldset id="kotak2">
               <legend >Form Edit data UKM</legend>
               <h2>Lengkapi data UKM dgn benar</h2>
               
               <table>
                    <tr>
                         <td>NIM</td>
                         <td>:</td>
                         <td><input type="text" name="nim" readonly = 'true' value = "<?php echo $data['nim'] ?>"></td>></td>
                    </tr>
                    <tr>
                         <td>Nama pendaftar</td>
                         <td>:</td>
                         <td><input type="text" name="nama_pendaftar" value = "<?php echo $data['nama_pendaftar'] ?>"></td>></td>

                    </tr>
                    <tr>
                         <td>Nama ukm yang ingin didaftar</td>
                         <td>:</td>
                         <td><select name="UKM">
                              <option value="001">Progress</option>
                              <option value="002">RADE</option>
                              <option value="003">KSL</option>
                              <option value="004">JCOS</option>
                              <option value="005">MCOS</option>
                              <option value="006">DOS</option>
                              <option value="007">BOS</option>
                              <option value="008">Basket</option>
                              <option value="009">Futsal</option>
                              <option value="010">SBMC</option>
                              <option value="011">Multimedia</option>
                              <option value="012">Pragina</option>
                              <option value="013">Kompas</option>
                              <option value="014">PMK</option>
                              <option value="015">KMHD</option>
                              <option value="016">VOS</option>
                              <option value="017">U2M</option>
                              <option value="018">Himatography</option>
                              <option value="019">Syntax</option>
                              <option value="020">Ghost</option>
                         </select></td>
                    </tr>
                    <tr>
                         <td>Keinginan jadi pengurus</td>
                         <td>:</td>
                         <td>
                            <?php
                                if($data['jadipengurus'] == 1) {
                            ?>
                                <input type="radio" name="jadipengurus" value="1" checked> Ya 
                                <input type="radio" name="jadipengurus" value="2"> Tidak
                            <?php } else {?>
                                <input type="radio" name="jadipengurus" value="1"> Ya
                                <input type="radio" name="jadipengurus" value="2" checked> Tidak
                            <?php } ?>    

                        </td>
                    </tr>
                    <tr>
                         <td>Alasan ingin mendaftar ke sana</td>
                         <td>:</td>
                         <td><input type="text" name="alasan" value = "<?php echo $data['alasan'] ?>"></td>></td>
                    </tr>
                    <tr>
                         <td>Nomor Kontak</td>
                         <td>:</td>
                         <td><input type="text" name="nomor_kontak" value = "<?php echo $data['nomor_kontak'] ?>"></td>></td>
                    </tr>
                    <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" value="simpan"></td>
                    </tr>
                    
               </table>
          </fieldset>
     </form>