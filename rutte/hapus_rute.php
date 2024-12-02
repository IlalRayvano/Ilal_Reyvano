<?php
session_start();   
include("koneksi.php"); 

if (isset($_GET['id'])){
    $id = $_GET['id'];
   $sql ="DELETE FROM rute WHERE rute_id=$id";
   $query = mysqli_query($db, $sql);

   if ($query){
    $_SESSION['notifikasi'] = "Data Rute Berhasil Di Hapus";
   }else{
    $_SESSION['notifikasi'] = "Data Rute Gagal Di Hapus";
   }
    
   header("Location: index.php");
}else{
 
    die("Akses ditolak...");
}
?>