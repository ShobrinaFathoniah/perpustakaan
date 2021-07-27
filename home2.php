<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title> Halaman Utama (Administrator) - Iread </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
            <li class="active"><a href="home2.php">Home</a></li>
            <li><a href="buku2.php">Daftar Buku</a></li>
            <li><a href="ebook2.php">Daftar E-Book</a></li>
            <li><a href="anggota.php">Daftar Anggota</a></li>
            <li><a href="data_pinjam.php">Data Peminjaman</a></li>
            <li><a href="kembali2.php">Data Pengembalian</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </header>
    </div>
    
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/bg.jpg');">
      <div id="pageintro" class="hoc clear"> 
        <article>
          <div>
            <h1 class="heading">Selamat Datang, <?php echo $_SESSION['username']; ?> !</h1>
            <p>Jangan membaca sampai koma,<br>Tapi bacalah sampai titik.</br></p>
          </div>
        </article>
      </div>
    </div>
    
    <embed src="A7x~09 A Little Piece Of Heaven.mp3" hidden="true" autostart="true" loop="false"/>
    
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
