<?php
include ("koneksi.php");
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Penumpang Bus Telolet | Bikini Bottom</title>
    <style>
        table,th,td{
     border: 1px solid black;
     border-collapse: collapse;
     padding: 10px;
        }
    </style>     
    <ul>
          <li><a href="http://localhost/bus_reservation/penumpang/index.php">Data Penumpang</a></li>
          <li><a href="http://localhost/bus_reservation/rutte/index.php">Data Rute</a></li>
    </ul> 
</head>
<body>
<h2>Data Penumpang</h2>
<?php if (isset($_SESSION['notifikasi'])): ?>
    <p><?php echo $_SESSION['notifikasi']; ?></p>
    <?php unset($_SESSION['notifikasi']); ?>
<?php endif; ?>
<table>
    <thead>
        <tr align="center">
            <th>NO</th>
            <th>Nama Penumpang</th>
            <th>Kontak</th>
            <th><a href="tambah_penumpang.php">Tambah Data</a></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $query = $db->query("SELECT * FROM penumpang");
        while ($telolet = $query->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $telolet['nama']?></td>
            <td><?php echo $telolet['kontak']?></td>
        
        <td align="center">
            <a href="edit_penumpang.php?id=<?php echo $telolet ['penumpang_id'] ?>">Edit</a>
            <a onclick="return confirm('Anda yakin ingin menghapus data?')" 
            href="hapus_penumpang.php?id=<?php echo $telolet['penumpang_id'] ?>">Hapus</a>
        </td>
    </tr>
<?php
    } 
?>
</tbody>
</table>
<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>