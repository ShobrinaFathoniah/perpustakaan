<!DOCTYPE HTML>
<html>
    <head>
        <title> Edit Data Anggota (Administrator) - Iread </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "registrasi">
        <form action="anggota.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Edit Data Anggota</h2>
            <table align = "center">
            <?php
                session_start();
                //connect to database
                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');

                $npm = $_POST['edit_id'];    

                $query = "select * from pendaftaran where npm= '$npm'";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row){
            ?>
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        Id Anggota
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eid_anggota" value="<?php echo $row["id_anggota"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eusername" value = "<?php echo $row['username'] ?>" > </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "epassword" value = "<?php echo $row['password'] ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Nama Lengkap
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "enama" value = "<?php echo $row['nama'] ?>"> </td>
                </tr>

                <tr>
                    <td>
                        NPM
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "enpm" value = "<?php echo $row['npm'] ?>"> </td>
                    <td> <input type = "hidden" name = "edit_id" value = "<?php echo $row['npm'] ?>"> </td>
                </tr>
                
                <tr>
                    <td>
                        Tanggal Lahir
                    </td>
                    <td></td>
                    <td> <input type = "date" name = "etgl_lhr" value = "<?php echo $row['tgl_lahir'] ?>"> </td>
                </tr>

                <tr>
                    <td>
                        Jenis Kelamin
                    </td>
                    <td></td>
                    <td> 
                        <input type = "text" name = "ejk" value = "<?php echo $row['jk'] ?>"> 
                    </td>
                </tr>

                <tr>
                    <td>
                        Alamat
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "ealamat" value = "<?php echo $row['alamat'] ?>"> </td>
                </tr>

                <tr>
                    <td>
                        e-Mail
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eemail" value = "<?php echo $row['email'] ?>"> </td>
                </tr>

                <tr>
                    <td>
                        Nomor Telepon
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "enohp" value = "<?php echo $row['no_tlp'] ?>"> </td>
                </tr>

                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td><input type="submit" name="update_btn" value="Update" > </td>
                    <td></td>
                    <td><a href = "anggota.php">
                        <input style= "font-size: 20px;
                        background-color: rgb(241, 53, 53);
                        border: line rgb(228, 202, 202);
                        color: white;
                        padding: 15px 15px;
                        text-align: center;
                        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                        text-decoration: none;
                        display: inline-block;
                        cursor: pointer;" type="text" name="batal" value="Batal" > </a> </td>
                </tr>
                <?php 
                }
                ?>
            </table>
        </form>
    </div>
    </body>
</html>