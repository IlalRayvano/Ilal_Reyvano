<?php
session_start(); 
include("koneksi.php");
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];
    $harga = $_POST['harga'];

    $sql = "INSERT  INTO penumpang
            (nama, kontak)
            VALUES ('$nama', '$kontak')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data Penumpang berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data Penumpang gagal ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>