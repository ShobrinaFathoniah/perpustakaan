<html>
    <head>
        <title> Edit Data Formulir Peminjaman Buku (Administrator) - Iread </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "pinjam">
        <form action="data_pinjam.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Edit Data Peminjaman Buku</h2>
            <table align = "center">
            <?php
                session_start();
                //connect to database
                $db = mysqli_connect("localhost", "root", "");
                mysqli_select_db($db, 'perpus_aku');

                $id_pinjam = $_POST['edit_id'];    

                $query = "select * from pinjam where id_pinjam= '$id_pinjam'";
                $query_run = mysqli_query($db, $query);

                foreach($query_run as $row){
            ?>
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        ID Pinjam
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eid_pinjam" value = "<?php echo $row["id_pinjam"]; ?>"> </td>
                    <td> <input type = "hidden" name = "edit_id" value = "<?php echo $row["id_pinjam"]; ?>"> </td>
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
                    <td> <input type = "text" name = "eusername" value = "<?php echo $row["username"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "enama" value = "<?php echo $row["nama"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Id Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "eid_buku" value = "<?php echo $row["id_buku"]; ?>"> </td>
                </tr>
                <tr>
                    <td>
                        Judul Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "ejudul" value = "<?php echo $row["judul"]; ?>"> </td>
                </tr>

                <tr>
                    <td>
                        Tanggal Mengambil Buku Pinjaman
                    </td>
                    <td></td>
                    <td> <input type = "date" name = "etgl_pjm" value = "<?php echo $row["tgl_pinjam"]; ?>"> </td>
                </tr>

                <tr>
                    <td>
                        Jumlah Buku
                    </td>
                    <td></td>
                    <td> <input type = "number" name = "ejmlh" value = "<?php echo $row["jumlah"]; ?>"> </td>
                </tr>
                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="update_btn" value="Update" > </td>
                    <td><a href = "data_pinjam.php">
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