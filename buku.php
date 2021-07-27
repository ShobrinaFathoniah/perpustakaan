<!DOCTYPE HTML>
<html>
  <head>
    <title>Daftar Buku - Iread</title>
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
            <li class ="active"><a href="buku.php">Daftar Buku</a></li>
            <li><a href="ebook.php">Daftar E-Book</a></li>
            <li><a href="pinjam2.php">Data Peminjaman</a></li>
            <li><a href="kembali.php">Data Pengembalian</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
    </div>
    
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/bg.jpg');">
        <div>
        <br>
            <h1 align = "center"> Daftar Buku </h1>
            <h4>
            <form action="" method="POST">
            <table align='right'>
              <tr>
                <td>
                <input type="text" name="cari_buku" placeholder="Pencarian" style="color: black;">
                </td>
                <td>
                <button type = "submit" name="cari" style="color:white; cursor: pointer; 
                  background-color: rgb(66, 172, 56); display: inline-block; align:right;"> Cari </button>
                </td>
              </tr>
            </table>
            </form>
            </h4>
            <br>
            <br>
            <table align = "center" border = "1" style='background-color: rgba(1, 2, 3, 0.719);'>
            <tr>
              <th>ID Buku</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>ISBN</th>
              <th>Jumlah Ketersediaan</th>
              <th>Lokasi Buku </th>
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

                if(isset($_POST['cari_buku'])){
                  $pencarian = $_POST['cari_buku'];
                
                $query = "SELECT * FROM buku WHERE id_buku like '%".$pencarian."%' OR judul like '%".$pencarian."%' 
                OR pengarang like '%".$pencarian."%' OR penerbit like '%".$pencarian."%' OR isbn like '%".$pencarian."%'
                OR lokasi like '%".$pencarian."%' ORDER BY id_buku ASC";
		        	 
  
                $result = mysqli_query($db, $query);

                if(!$result) {
                  die("Query Error : ".mysqli_errno($db)." - ".mysqli_error($db));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr> <td>". $row["id_buku"]."</td><td>". $row["judul"]. "</td><td>". $row["pengarang"]."</td><td>". $row["penerbit"]."</td><td>". $row["isbn"]."</td><td>". $row["jumlah_buku"]."</td><td>". $row["lokasi"]. "</td></tr>";
                }
              }else{
                $sql = " select id_buku, judul, pengarang, penerbit, isbn, jumlah_buku, lokasi from buku";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["id_buku"]."</td><td>". $row["judul"]. "</td><td>". $row["pengarang"]."</td><td>". $row["penerbit"]."</td><td>". $row["isbn"]."</td><td>". $row["jumlah_buku"]."</td><td>". $row["lokasi"]. "</td></tr>";
                  }

                  echo "</table>";
                }else{
                  echo "0 result";
                }

                $db -> close();
              }
                ?>
        </div>
    </div>  

    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
  </body>
</html>