<html>
    <head>
        <title>  Tambah Buku (Administrator) - Iread  </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "Tambah">
        <form action="tambah_proses.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Penambahan Buku Baru</h2>
            <table align = "center">
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        ID Buku
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "id_buku" placeholder = "Masukan ID Buku"> </td>
                </tr>
                <tr>
                    <td>
                        Judul
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "judul" placeholder = "Masukan Judul Buku"> </td>
                </tr>
                <tr>
                    <td>
                        Pengarang
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "pengarang" placeholder = "Masukan Pengarang Buku"> </td>
                </tr>
                <tr>
                    <td>
                        Penerbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "penerbit" placeholder = "Masukan Penerbit Buku"> </td>
                </tr>

                <tr>
                    <td>
                        Tahun Terbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "thn_terbit" placeholder = "Masukan Tahun Terbit Buku"> </td>
                </tr>

                <tr>
                    <td>
                        ISBN
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "isbn" placeholder = "Masukan ISBN Buku"> </td>
                </tr>
                <tr>
                    <td>
                        Jumlah Buku
                    </td>
                    <td></td>
                    <td> <input type = "number" name = "jmlh_buku" placeholder = "Masukan Jumlah Buku"> </td>
                </tr>
                <tr>
                    <td>
                        Lokasi
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "lokasi" placeholder = "Masukan Lokasi Buku"> </td>
                </tr>
                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah" > </td>
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
            </table>
        </form>
    </div>
    </body>


</html>