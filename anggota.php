<?php

session_start();

//connect to database
$db = mysqli_connect("localhost", "root", "");
mysqli_select_db($db, 'perpus_aku');

  if(isset($_POST['delete_btn'])){

    $npm = $_POST['delete_id'];    

    $query = "DELETE FROM pendaftaran WHERE npm= '$npm'";
    $query_run = mysqli_query($db, $query);

       if($query_run){
        echo "<script> alert('Data Telah di Hapus!') </script>";
       }else{
        echo "<script> alert('Data Gagal di Hapus!') </script>";
       }
  }

    if(isset($_POST['update_btn'])){
        $id = $_POST['edit_id'];
        $id_anggota = $_POST['eid_anggota'];
        $username = $_POST['eusername'];
        $password = $_POST['epassword'];
        $nama = $_POST['enama'];
        $npm = $_POST['enpm'];
        $tgl_lhr = $_POST['etgl_lhr'];
        $jk = $_POST['ejk'];
        $alamat = $_POST['ealamat'];
        $email = $_POST['eemail'];
        $no_tlp = $_POST['enohp'];

      $query = "UPDATE pendaftaran SET npm = '$npm', id_anggota = '$id_anggota', nama='$nama', tgl_lahir = '$tgl_lhr', jk='$jk', alamat='$alamat', 
      email = '$email', no_tlp ='$no_tlp', username='$username', password='$password' WHERE npm = '$id'";
     
     $query_run = mysqli_query($db, $query);

     if($query_run){
      echo "<script> alert('Data Telah di Update!') </script>";
     }else{
      echo "<script> alert('Data Gagal di Update!') </script>";
     }
    }
?>


<!DOCTYPE HTML>
<html>
  <head>
    <title>Daftar Anggota (Administrator) - Iread</title>
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
          <li><a href="home2.php">Home</a></li>
            <li><a href="buku2.php">Daftar Buku</a></li>
            <li><a href="ebook2.php">Daftar E-Book</a></li>
            <li class = "active"><a href="anggota.php">Daftar Anggota</a></li>
            <li><a href="data_pinjam.php">Data Peminjaman</a></li>
            <li><a href="kembali2.php">Data Pengembalian</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
    </div>
    
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/bg.jpg');">
        <div>
        <br>
            <h1 align = "center"> Daftar Anggota </h1>
            <h4 style= "text-align: center;">
            <form action = "print_anggota.php" method="POST">
                    <button type = "submit" name="print_btn" style="color:white; cursor: pointer; 
                  background-color: rgb(14, 196, 209); display: inline-block; align:right;"> Print </button>
            </form>
            </h4>
            <h4>
            <form action="" method="POST">
            <table align='right'>
              <tr>
                <td>
                <input type="text" name="cari_anggota" placeholder="Pencarian" style="color: black;">
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
            <br>
            <table align = "center" border = "1" style='background-color: rgba(2, 15, 27, 0.719);'>
            <tr>
              <th>NPM</th>
              <th> Id Anggota </th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>e-Mail</th>
              <th>No Telepon</th>
              <th colspan='2'> Aksi </th>
            </tr>

              <tr>
              <?php
                //connect to database

                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');
                
                if($db -> connect_error){
                  die("connection failed :". $db-> connect_error);
                }

                if(isset($_POST['cari_anggota'])){
                  $pencarian = $_POST['cari_anggota'];

                $query = "SELECT * FROM pendaftaran WHERE npm like '%".$pencarian."%' OR id_anggota like '%".$pencarian."%' 
                OR nama like '%".$pencarian."%' OR tgl_lahir like '%".$pencarian."%' OR jk like '%".$pencarian."%'
                OR alamat like '%".$pencarian."%' OR email like '%".$pencarian."%' OR no_tlp like '%".$pencarian."%' ORDER BY npm";
		        	 
  
                $result = mysqli_query($db, $query);

                if(!$result) {
                  die("Query Error : ".mysqli_errno($db)." - ".mysqli_error($db));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr> <td>". $row["npm"]."</td><td>". $row["id_anggota"]. "</td><td>". $row["nama"]. "</td><td>". $row["tgl_lahir"]."</td><td>". $row["jk"]."</td><td>". $row["alamat"]."</td><td>". $row["email"]."</td><td>". $row["no_tlp"]."</td>"
                    ?>
                  <td> <form action = "edit_anggota.php" method="POST">
                        <input type="hidden" name="edit_id" value = "<?php echo $row['npm']; ?>">
                        <button type = "submit" name="edit_btn" style="color:white; cursor: pointer; 
                        background-color: rgb(46, 46, 255); display: inline-block; "> Update </button>
                        </form>
                  </td>

                  <td> <form action = "" method="POST">
                  <input type="hidden" name="delete_id" value = "<?php echo $row['npm']; ?>">
                    <button type = "submit" name="delete_btn" style="color:white; cursor: pointer; 
                  background-color: rgb(255, 62, 62); display: inline-block;"> Delete </button>
                  </form>
                  </td>
                  </tr>
                  <?php
                    ;
                  }
                $db -> close();
              }else{
                $sql = " select npm, id_anggota, nama, tgl_lahir, jk, alamat, email, no_tlp from pendaftaran";
                $result = $db-> query($sql);

                if($result-> num_rows > 0){
                  while($row = $result-> fetch_assoc()){
                    echo "<tr> <td>". $row["npm"]."</td><td>". $row["id_anggota"]. "</td><td>". $row["nama"]. "</td><td>". $row["tgl_lahir"]."</td><td>". $row["jk"]."</td><td>". $row["alamat"]."</td><td>". $row["email"]."</td><td>". $row["no_tlp"]."</td>"
                    ?>
                  <td> <form action = "edit_anggota.php" method="POST">
                        <input type="hidden" name="edit_id" value = "<?php echo $row['npm']; ?>">
                        <button type = "submit" name="edit_btn" style="color:white; cursor: pointer; 
                        background-color: rgb(46, 46, 255); display: inline-block; "> Update </button>
                        </form>
                  </td>

                  <td> <form action = "" method="POST">
                  <input type="hidden" name="delete_id" value = "<?php echo $row['npm']; ?>">
                    <button type = "submit" name="delete_btn" style="color:white; cursor: pointer; 
                  background-color: rgb(255, 62, 62); display: inline-block;"> Delete </button>
                  </form>
                  </td>
                  </tr>
                  <?php
                    ;
                  }
                  echo "
                  <tr>
                    <td colspan='10'><h4 style ='font-size: small; text-align: center; color: springgreen;'> <br> <a href = 'tambah_anggota.html'> Tambah Anggota </a> </h4> </td>
                  </tr>
                  </table>
                  <br>";
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