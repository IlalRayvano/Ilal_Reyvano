<?php
session_start();
include("koneksi.php");

if (isset($_POST['simpan'])) {
    
    $id = $_POST['penumpang_id'];
    $nama = $_POST['nama'];
    $kontak=$_POST['kontak'];
   



    $sql = "UPDATE rute SET
            nama='$nama',
            kontak='$kontak',
            WHERE penumpang_id=$id";

    $query = mysqli_query($db, $sql);
    if ($query) {
    
        $_SESSION['notifikasi'] = "Data Penumpang berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data Penumpang gagal diperbarui!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>