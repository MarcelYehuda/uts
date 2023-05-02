<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>LAtihan_UTS</title>
     <link rel="stylesheet" href="style_main.css">

</head>
<body>
     <h1>SELAMAT DATANG DI PENDAFTARAN UKM STIKOM</h1>
     <form action="uts_proses.php" method="POST" >

          <fieldset id="kotak2">
               <legend >Form Input data UKM</legend>
               <h2>Lengkapi data UKM dgn benar</h2>
               
               <table>
                    <tr>
                         <td>NIM</td>
                         <td>:</td>
                         <td><input type="text" name="nim"></td>
                    </tr>
                    <tr>
                         <td>Nama pendaftar</td>
                         <td>:</td>
                         <td><input type="text" name="nama_pendaftar"></td>

                    </tr>
                    <tr>
                         <td>Nama ukm yang ingin didaftar</td>
                         <td>:</td>
                         <td><select name="nama_ukm">
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
                              <input type="radio" name="jadipengurus" value="1"> Ya 
                              <input type="radio" name="jadipengurus" value="2"> Tidak
                         </td>
                    </tr>
                    <tr>
                         <td>Alasan ingin mendaftar ke sana</td>
                         <td>:</td>
                         <td><input type="text" name="alasan"></td>
                    </tr>
                    <tr>
                         <td>Nomor Kontak</td>
                         <td>:</td>
                         <td><input type="text" name="nomor_kontak"></td>
                    </tr>
                    <tr>
                         <td></td>
                         <td></td>
                         <td><input type="submit" value="simpan"></td>

                    </tr>
                    
               </table>
          </fieldset>
     </form>
     <br><br><br>
     <h2>Data Pendaftar UKM</h2>
     <table class="table">
          <tr>
               <th>NIM</th>
               <th>Nama pendaftar</th>
               <th>Nama UKM yang didaftar</th>
               <th>Keinginan jadi Pengurus </th>
               <th>Alasan mendaftar</th>
               <th>Nomor Kontak</th>
               <th>Act</th>

          </tr>

          <?php
          include "koneksi.php";
          $qry = "SELECT * FROM daftar_ukm";
          $exec = mysqli_query($con,$qry);
          
          while($data = mysqli_fetch_assoc($exec)){
               ?>
          <tr>
               <td><?php echo $data['nim']?></td>
               <td><?php echo $data['nama_pendaftar']?></td>
               <td><?php echo $data['nama_ukm']?></td>
               <td><?php echo $data['jadipengurus']?></td>
               <td><?php echo $data['alasan']?></td>
               <td><?php echo $data['nomor_kontak']?></td>
               <td>
                <a href="uts_edit.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a>
                <a href="uts_delete.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
            </td>
          </tr>     
          <?php } ?>
     </table>
</body>
</html>