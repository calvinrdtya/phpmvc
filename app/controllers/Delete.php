<?php
session_start();
include "koneksi.php"; // masukan konekasi DB
// ambil variable ID dari URL
$id = @$_GET['id'];
//Proses query hapus data
$del=mysqli_query($koneksi,"delete from guru where id='$id'");
if($del)
    {
        $_SESSION['pesan'] = '<font color=green>data berhasil dihapus.</font>';
        header("location: .php"); // kembali ke tampil data
    } 
        else
    {
    echo "Dada gagal dihapus!";
}?>