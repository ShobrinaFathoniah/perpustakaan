<?php
    session_start();
    //connect to database

    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, 'perpus_aku');
        $id_anggota = $_POST['id_anggota'];
        $username   = $_POST['username'];
        $nama = $_POST['nama'];
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $tgl_pinjam = $_POST['tgl_pjm'];
        $jmlh = $_POST['jmlh'];

    $s = "select * from pinjam where id_buku = '$id_buku'";

    $result = mysqli_query($db, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo " Buku sedang dipinjam";
    }else{
        $reg = " insert into pinjam(id_buku, id_anggota, username, nama, judul, tgl_pinjam, jumlah) VALUES ('$id_buku', '$id_anggota','$username', '$nama', '$judul', '$tgl_pinjam', '$jmlh')";
        mysqli_query($db, $reg);
        $_SESSION['username'] = $username;
        echo" Peminjaman Telah Berhasil";
        header('location: data_pinjam.php');
    }
    
?>
