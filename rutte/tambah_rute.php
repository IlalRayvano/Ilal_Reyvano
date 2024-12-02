<!DOCTYPE html>
<html>
<head>
    <title>Bus Telolet | Bikini Bottom</title>
</head>
<body>
    <h3>Tambah Data Siswa</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Kota Asal</td>
                <td><input type="text" name="kota_asal" required></td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td><input type="text" name="kota_tujuan" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>