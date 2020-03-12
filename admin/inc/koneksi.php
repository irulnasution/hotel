<?php 
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'hotel';

    $conn = mysqli_connect($server, $user, $pass, $database) 
    or die('Koneksi database gagal');
?>