<?php
session_start();   
include("koneksi.php"); 

if (isset($_GET['id'])){
    $id = $_GET['id'];
   $sql ="DELETE FROM penumpang WHERE penumpang_id=$id";
   $query = mysqli_query($db, $sql);

   if ($query){
    $_SESSION['notifikasi'] = "Data Penumpang Berhasil Di Hapus";
   }else{
    $_SESSION['notifikasi'] = "Data Penumpang Gagal Di Hapus";
   }
    
   header("Location: index.php");
}else{
 
    die("Akses ditolak...");
}
?>