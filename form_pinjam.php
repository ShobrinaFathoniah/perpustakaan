<html>
    <head>
        <title> Formulir Peminjaman Buku (Administator) - Iread </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "pinjam">
        <form action="pinjam_proses.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Formulir Peminjaman Buku</h2>
            <table align = "center">
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        Id Anggota
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "id_anggota" placeholder="Masukan ID Anggota"> </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "username" placeholder="Masukan Usernamae Anggota"> </td>
                </tr>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "nama" placeholder="Masukan Nama Lengkap Anggota"> </td>
                </tr>
                <tr>
                    <td>
                        Id Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "id_buku" placeholder="Masukan ID Buku Pinjam"> </td>
                </tr>
                <tr>
                    <td>
                        Judul Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "judul" placeholder="Masukan Judul Buku Pinjam"> </td>
                </tr>

                <tr>
                    <td>
                        Tanggal Mengambil Buku Pinjaman
                    </td>
                    <td></td>
                    <td> <input type = "date" name = "tgl_pjm"> </td>
                </tr>

                <tr>
                    <td>
                        Jumlah Buku
                    </td>
                    <td></td>
                    <td> <input type = "number" name = "jmlh" placeholder="Masukan Jumlah Buku Pinjam"> </td>
                </tr>
                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="pinjam" value="Pinjam" > </td>
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
            </table>
        </form>
    </div>
    </body>


</html>