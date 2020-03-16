<?php 
session_start();
include 'inc/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$data = mysqli_num_rows($query);

if ($data > 0) {
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:sign_in.php?pesan=gagal");
}



?>