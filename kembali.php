<!DOCTYPE HTML>
<html>
  <head>
    <title>Data Pengembalian Buku - Iread</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/buku.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body id="top">
    <div class="wrapper row1">
      <header id="header" class="hoc clear"> 
        <div id="logo" class="fl_left" style = "width: 90px;">
          <img  src="images/Logo.png">
          <p>
            <br>
          </p>
        </div>
        
        <nav id="mainav" class="fl_right">
          <ul class="clear">
          <li><a href="home.php">Home</a></li>
            <li><a href="buku.php">Daftar Buku</a></li>
            <li><a href="ebook.php">Daftar E-Book</a></li>
            <li><a href="pinjam2.php">Data Peminjaman</a></li>
            <li class = "active"><a href="kembali.php">Data Pengembalian</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
    </div>
    
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/bg.jpg');">
        <div>
        <br>
            <h1 align = "center"> Data Pengembalian Buku </h1>
            <br>
            <table align = "center" border = "1" style='background-color: rgba(1, 2, 3, 0.719);'>
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

              <tr>
              <?php
                session_start();
                //connect to database

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');


                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }
                
                $nama = $_SESSION['username'];

                $sql = " select id_pinjam, id_buku, id_anggota, username, nama, judul, tgl_pinjam, tgl_kembali, jumlah from pinjam where username = '$nama'  ORDER BY pinjam.tgl_kembali ASC";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["id_pinjam"]."</td><td>". $row["id_buku"]. "</td><td>". $row["id_anggota"]."</td><td>". $row["nama"]."</td><td>". $row["judul"]."</td><td>". $row["tgl_pinjam"]."</td><td>". $row["tgl_kembali"]. "</td><td>". $row["jumlah"]. "</td></tr>" ;
                  }

                  echo "</table>";
                }else{
                  echo "0 result";
                }

                $db -> close();
                ?>
        </div>
    </div>  

    <div class="wrapper row5">
      <div id="copyright" class="hoc clear"> 
        <p>Copyright &copy; 2020 - All Rights Reserved</p>
      </div>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
  </body>
</html>