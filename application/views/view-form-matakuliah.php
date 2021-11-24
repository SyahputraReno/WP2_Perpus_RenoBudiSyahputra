<html>
<<<<<<< HEAD

<head>
    <title>Form Input Matakuliah</title>
</head>

=======
<head>
    <title>Form Input Matakuliah</title>
</head>
<style>
    fieldset {
    width: 40%;
    margin: 20px auto;
    border-radius: 5px;

    select {
        width: 100%;
    }
    }
</style>
>>>>>>> c9de910 (Pertemuan 9 dan 10)
<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>"method="post">
            <table>
                <tr>
<<<<<<< HEAD
                    <th colspan="3"> Form Input Data Mata Kuliah</th>
=======
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
>>>>>>> c9de910 (Pertemuan 9 dan 10)
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
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