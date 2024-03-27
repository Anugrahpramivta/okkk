<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['Username'];
$password = $_POST['Password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE Username='$Username' and Password='$Password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
$row = mysqli_fetch_assoc($login);
        $_SESSION['UserID'] = $row['UserID'];
 header("location:home.php");

?>