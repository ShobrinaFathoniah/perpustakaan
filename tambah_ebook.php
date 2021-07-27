<html>
    <head>
        <title>  Tambah eBook (Administrator) - Iread  </title>
        <link href = "layout/styles/registrasi.css" rel = "stylesheet" type = "text/css" media = "all">
    </head>

    <body style="background-image:url('images/demo/backgrounds/bg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div id = "Tambah">
        <form action="tambahe_proses.php" method="POST" >
            <br>
            <h2 style = "font-size: 50px;">Penambahan e-Book Baru</h2>
            <table align = "center">
                <tr>
                   <td></td>
                </tr>
                <tr>
                    <td>
                        Judul
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "judul" placeholder="Masukan Judul e-Book"> </td>
                </tr>
                <tr>
                    <td>
                        Pengarang
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "pengarang" placeholder="Masukan Pengarang e-Book"> </td>
                </tr>
                <tr>
                    <td>
                        Penerbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "penerbit" placeholder="Masukan Penerbit e-Book"> </td>
                </tr>

                <tr>
                    <td>
                        Tahun Terbit
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "thn_terbit" placeholder="Masukan Tahun Terbit e-Book"> </td>
                </tr>

                <tr>
                    <td>
                        Link
                    </td>
                    <td></td>
                    <td> <input type = "text" name = "link" placeholder="Masukan Link e-Book"> </td>
                </tr>
                <tr> 
                    <td><br></td> 
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah" > </td>
                    <td><a href = "ebook2.php">
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