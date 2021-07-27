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

    $s = "select * from pendaftaran where username = '$username' && password = '$password'";

    $result = mysqli_query($db, $s);

    $num = mysqli_num_rows($result);

    if($username == 'admin' && $password == '123456'){
        $_SESSION['username'] = $username;
        header('location: home2.php');
    }else if($num == 1){
        $_SESSION['username'] = $username;
        header('location: home.php');
    }else{
        header('location: login.html');
    } 
?>