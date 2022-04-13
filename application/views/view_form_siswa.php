<html>
    <head>
        <title>Form Input Siswa</title>
    </head>

    <body>
        <center>
            <?php echo validation_errors(); ?>
            <form action="<?= base_url('form-data-mahasiswa/print'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3"> Form Siswa </th>
                </tr>

                <tr>
                    <td colspan="3"></td>
                    <hr>
                </tr>

                <tr>
                    <th>NAMA SISWA</th>
                    <th> : </th>
                    <td><input type="text" name="Nama" id="Nama"> </td>
                </tr>

                <tr>
                    <th>NIS</th>
                    <th> : </th>
                    <td><input type="text" name="NIS" id="NIS"> </td>
                </tr>

                <tr>
                    <th>KELAS</th>
                    <th> : </th>
                    <td><input type="text" name="KELAS" id="KELAS"> </td>
                </tr>

                <tr>
                    <th>TANGGAL LAHIR</th>
                    <th> : </th>
                    <td><input type="date" name="Lahir" id="Lahir"> </td>
                </tr>

                <tr>
                    <th>TEMPAT LAHIR</th>
                    <th> : </th>
                    <td><input type="text" name="Tempat" id="Tempat"> </td>
                </tr>

                <tr>
                    <th>ALAMAT</th>
                    <th> : </th>
                    <td><input type="text" name="Alamat" id="Alamat"> </td>
                </tr>

                <tr>
                    <th>JENIS KELAMIN</th>
                    <th> : </th>
                    <td><input type="radio" name="Jen_kel" value="Laki-laki">Laki-laki</td>
                    <td><input type="radio" name="Jen_kel" value="Perempuan">Perempuan</td>
                </tr>

                <tr>
                    <th>AGAMA</th>
                    <th> : </th>
                    <td>
                        <select name="Agama" id="Agama">
                            <option value=""> Pilih </option>
                            <option value="ISLAM"> ISLAM </option>
                            <option value="KATOLIK"> KATOLIK </option>
                            <option value="KRISTEN"> KRISTEN </option>
                            <option value="BUDDHA"> BUDDHA </option>
                            <option value="HINDU"> HINDU </option>
                            <option value="KHONGHUCU"> KHONGHUCU </option>
                    </td>
                </tr> 

                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
            </form>
         </center>
    </body>
</html> 