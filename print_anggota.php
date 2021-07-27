<?php
session_start();

if(isset($_POST['print_btn'])){
      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=Laporan Anggota Perpustakaan.xls");//ganti nama sesuai keperluan
      header("Pragma: no-cache");
      header("Expires: 0");
    }
?>

<!DOCTYPE HTML>
<html>
    <header>
        <title> Print Laporan Daftar Anggota </title>
    </header>

    <body>
        <h1 align = "center"> Laporan Anggota Perpusakaan </h1>
        <table align = "center" border = "1">
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>e-Mail</th>
                <th>No Telepon</th>
            </tr>
            <?php
                //connect to database

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');
                
                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }

                $sql = " select npm, nama, tgl_lahir, jk, alamat, email, no_tlp from pendaftaran";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["npm"]."</td><td>". $row["nama"]. "</td><td>". $row["tgl_lahir"]."</td><td>". $row["jk"]."</td><td>". $row["alamat"]."</td><td>". $row["email"]."</td><td>". $row["no_tlp"]."</td></tr>";
                  }
                  echo "</table>";
                }else{
                  echo "0 result";
                }

                $db -> close();
                ?>
                <br>
                <br>
                <br>
                <br>
            <p align='center'>Copyright &copy; 2020 - All Rights Reserved</p>
    </body>
</html>