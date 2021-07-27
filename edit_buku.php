<!DOCTYPE HTML>
<html>
    <head>
        <title>  Edit Data Buku (Administrator) - Iread  </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
        <link href = "layout/styles/buku.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "edit">
        <form action="buku2.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Edit Data Buku</h2>
            <table align = "center">
            <?php
                session_start();
                //connect to database
                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');

                $id_buku = $_POST['edit_id'];    

                $query = "select * from buku where id_buku= '$id_buku'";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row){
            ?>
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        ID Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eid_buku" value = "<?php echo $row["id_buku"]; ?>"> </td>
                    <td> <input type = "hidden" name = "edit_id" value = "<?php echo $row["id_buku"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Judul
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "ejudul" value = "<?php echo $row["judul"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Pengarang
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "epengarang" value = "<?php echo $row["pengarang"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Penerbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "epenerbit" value = "<?php echo $row["penerbit"]; ?>"> </td>
                </tr>

                <tr>
                    <td>
                        Tahun Terbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "ethn_terbit" value = "<?php echo $row["tahun_terbit"]; ?>"> </td>
                </tr>

                <tr>
                    <td>
                        ISBN
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eisbn" value = "<?php echo $row["isbn"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Jumlah Buku
                    </td>
                    <td></td>
                    <td> <input type = "number" name = "ejmlh_buku" value = "<?php echo $row["jumlah_buku"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Lokasi
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "elokasi" value = "<?php echo $row["lokasi"]; ?>"> </td>
                </tr>
                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td><input type="submit" name="update_btn" value="Update" > </td>
                    <td></td>
                    <td><a href = "buku2.php">
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