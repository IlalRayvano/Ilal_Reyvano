<?php
include("koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM penumpang WHERE penumpang_id = '$id'");
$telolet = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Penumpang Bus Telolet | Bikini Bottom</title>
</head>
<body>
    <h3>Edit Rutelolet</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="penumpang_id" value="<?php echo $telolet['penumpang_id']; ?>">
        <table border="0">
            
            <tr>
                <td>Nama Penumpang</td>
                <td>
                    <input type='text' name='nama' value="<?php echo $telolet['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>
                    <input type='text' name='kontak' value="<?php echo $telolet['kontak']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
