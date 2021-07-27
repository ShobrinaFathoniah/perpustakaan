<?php
session_start();

if(isset($_POST['print_btn'])){
      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=Laporan Pengembalian Buku.xls");//ganti nama sesuai keperluan
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
        <h1 align = "center"> Laporan Pengembalian Buku </h1>
        <table align = "center" border = "1">
            <tr>
              <th>ID Pengembalian</th>
              <th>ID Buku</th>
              <th>ID Anggota</th>
              <th>Nama</th>
              <th>Judul</th>
              <th>Tanggal Pinjam</th>
              <th>Tanggal Kembali</th>
              <th>Jumlah</th>
            </tr>
              <?php
              //connect to database

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');

                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }
                
                $sql = " select id_pinjam, id_buku, id_anggota, nama, judul, tgl_pinjam, tgl_kembali, jumlah from pinjam ORDER BY pinjam.tgl_kembali ASC";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["id_pinjam"]."</td><td>". $row["id_buku"]. "</td><td>". $row["id_anggota"]."</td><td>". $row["nama"]."</td><td>". $row["judul"]."</td><td>". $row["tgl_pinjam"]."</td><td>". $row["tgl_kembali"]. "</td><td>". $row["jumlah"]. "</td> </tr>";
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