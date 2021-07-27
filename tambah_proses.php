<?php
    session_start();
    //connect to database

    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, 'perpus_aku');
        $id_buku = $_POST['id_buku'];
        $judul   = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['thn_terbit'];
        $isbn = $_POST['isbn'];
        $jmlh_buku = $_POST['jmlh_buku'];
        $lokasi = $_POST['lokasi'];
        
    $s = "select * from buku where id_buku = '$id_buku'";

    $result = mysqli_query($db, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo " Buku telah ditambahkan!";
        header('location: tambah_buku.php');
    }else{
        $reg = " insert into buku(id_buku, judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi) VALUES ('$id_buku', '$judul','$pengarang', '$penerbit', '$tahun_terbit', '$isbn', '$jmlh_buku', '$lokasi')";
        mysqli_query($db, $reg);
        $_SESSION['username'] = $username;
        echo" Penambahan Telah Berhasil";
        header('location: buku2.php');
    }

?>