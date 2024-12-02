<?php
session_start();
include("koneksi.php");

if (isset($_POST['simpan'])) {
    
    $id = $_POST['rute_id'];
    $kota_asal = $_POST['kota_asal'];
    $kota_tujuan=$_POST['kota_tujuan'];
    $harga = $_POST['harga'];



    $sql = "UPDATE rute SET
            kota_asal='$kota_asal',
            kota_tujuan='$kota_tujuan',
            harga='$harga'
            WHERE rute_id=$id";

    $query = mysqli_query($db, $sql);
    if ($query) {
    
        $_SESSION['notifikasi'] = "Data Rute berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data Rute gagal diperbarui!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>