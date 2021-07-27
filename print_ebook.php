<?php
session_start();

if(isset($_POST['print_btn'])){
      header("Content-type: application/octet-stream");
      header("Content-Disposition: attachment; filename=Laporan Daftar eBook.xls");//ganti nama sesuai keperluan
      header("Pragma: no-cache");
      header("Expires: 0");
    }
?>

<!DOCTYPE HTML>
<html>
    <header>
        <title> Print Laporan Daftar eBook </title>
    </header>

    <body>
        <h1 align = "center"> Laporan Daftar eBook </h1>
        <table align = "center" border = "1">
            <tr>
              <th>No</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Link</th>
            </tr>
            <?php
                //connect to database

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');
                
                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }

                $sql = " select no, judul, pengarang, penerbit, tahun_terbit, link from ebook";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["no"]."</td><td>". $row["judul"]. "</td><td>". $row["pengarang"]."</td><td>". 
                    $row["penerbit"]."</td><td>". $row["tahun_terbit"]."</td><td>". $row["link"]."</td></tr>";
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