<html>
    <head>
        <title>DATA SISWA</title>
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">DATA SISWA</th>
                </tr>

                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <th>NAMA SISWA</th>
                    <th>:</th>
                    <td><?= $Nama; ?></td>
                </tr>

                <tr>
                    <th>NIS</th>
                    <th>:</th>
                    <td><?= $NIS; ?></td>
                </tr>

                <tr>
                    <th>KELAS</th>
                    <th>:</th>
                    <td><?= $KELAS; ?></td>
                </tr>

                <tr>
                    <th>TANGGAL LAHIR</th>
                    <th>:</th>
                    <td><?= $Lahir; ?></td>
                </tr>

                <tr>
                    <th>TEMPAT LAHIR</th>
                    <th>:</th>
                    <td><?= $Tempat; ?></td>
                </tr>

                <tr>
                    <th>ALAMAT</th>
                    <th>:</th>
                    <td><?= $Alamat; ?></td>
                </tr>

                <tr>
                    <th>NAMA SISWA</th>
                    <th>:</th>
                    <td><?= $Nama; ?></td>
                </tr>

                <tr>
                    <th>JENIS KELAMIN</th>
                    <th>:</th>
                    <td><?= $Jen_kel; ?></td>
                </tr>

                <tr>
                    <th>AGAMA</th>
                    <th>:</th>
                    <td><?= $Agama; ?></td>
                </tr>

                <tr>
                <td colspan="3" align="center">
                        <a href="<?= base_url('form-data-mahasiswa');?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html> 