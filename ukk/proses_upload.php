<?php
include "koneksi.php";

$FotoID=$_POST['FotoID'];
$JudulFoto=$_POST['JudulFoto'];
$DeskripsiFoto=$_POST['DeskripsiFoto'];
$TanggalUnggah=$_POST['TanggalUnggah'];
$LokasiFile=$_POST['LokasiFile'];
$AlbumID=$_POST['AlbumID'];
$UserID=$_POST['UserID'];

$sql = "INSERT INTO nama_tabel (FotoID, JudulFoto, DeskripsiFoto, TanggalUnggah, LokasiFile, AlbumID, UserID) VALUES ('$FotoID','$JudulFoto','$DeskripsiFoto','$TanggalUnggah','$LokasiFile','$AlbumID','$UserID')";

if (mysqli_query($koneksi, $sql)) {
    header("location:home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
