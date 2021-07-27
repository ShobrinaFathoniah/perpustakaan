<?php
session_start();

if(isset($_POST['print_btn'])){
      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=Laporan Peminjaman Buku.xls");//ganti nama sesuai keperluan
      header("Pragma: no-cache");
      header("Expires: 0");
    }
?>

<!DOCTYPE HTML>
<html>
    <header>
        <title> Print Laporan Kembali </title>
    </header>

    <body>
        <h1 align = "center"> Laporan Peminjaman Buku </h1>
        <table align = "center" border = "1">
            <tr>
                <th>ID Pinjam</th>
                <th>ID Buku</th>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Judul</th>
                <th>Tanggal Pinjam</th>
                <th>Jumlah</th>
                <th>Ketentuan Hari Pengembalian</th>
            </tr>        
        
        <?php

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');

                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }
                
                $sql = " select id_pinjam, id_buku, id_anggota, nama, judul, tgl_pinjam, jumlah, pengembalian from pinjam order by tgl_pinjam desc";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["id_pinjam"]."</td><td>". $row["id_buku"]. "</td><td>". $row["id_anggota"]."</td><td>". $row["nama"]."</td>
                    <td>". $row["judul"]."</td><td>". $row["tgl_pinjam"]."</td><td>". $row["jumlah"]. "</td>
                    <td>". $row["pengembalian"]. "</td> </tr>";
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