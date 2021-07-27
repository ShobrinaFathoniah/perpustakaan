<?php
    session_start();
    //connect to database

    $db = mysqli_connect("localhost", "root", "");
    mysqli_select_db($db, 'perpus_aku');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $nama = $_POST['nama'];
        $npm = $_POST['npm'];
        $tgl_lhr = $_POST['tgl_lhr'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $no_tlp = $_POST['nohp'];

    $s = "select * from pendaftaran where npm = '$npm'";

    $result = mysqli_query($db, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo " NPM telah digunakan";
    }else{
        $reg = " insert into pendaftaran(npm, nama, tgl_lahir, jk, alamat, email, no_tlp, username, password) VALUES ('$npm', '$nama', '$tgl_lhr', '$jk', '$alamat', '$email', '$no_tlp', '$username', '$password')";
        mysqli_query($db, $reg);
        echo" Registrasi Telah Berhasil";
        header('location: login.html');
    }
    
?>