<?php
include("koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM rute WHERE rute_id = '$id'");
$telolet = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Bus Telolet | Bikini Bottom</title>
</head>
<body>
    <h3>Edit Rutelolet</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="rute_id" value="<?php echo $telolet['rute_id']; ?>">
        <table border="0">
            
            <tr>
                <td>Kota Asal</td>
                <td>
                    <input type='text' name='kota_asal' value="<?php echo $telolet['kota_asal']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Kota Tujuan</td>
                <td>
                    <input type='text' name='kota_tujuan' value="<?php echo $telolet['kota_tujuan']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td>
                    <input type='text' name='harga'value="<?php echo $telolet['harga']; ?>" required>
                </td>
            </tr>

        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
