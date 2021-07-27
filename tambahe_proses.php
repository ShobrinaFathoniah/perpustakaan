<?php
    session_start();
    //connect to database

    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, 'perpus_aku');
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['thn_terbit'];
        $link = $_POST['link'];
        
    $s = "select * from ebook where judul = '$judul'";

    $result = mysqli_query($db, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo " e-Book telah ditambahkan!";
        header('location: tambah_ebook.php');
    }else{
        $reg = " insert into ebook(judul, pengarang, penerbit, tahun_terbit, link) VALUES ('$judul','$pengarang', '$penerbit', '$tahun_terbit', '$link')";
        mysqli_query($db, $reg);
        echo" Penambahan Telah Berhasil";
        header('location: ebook2.php');
    }
    
?>