<?php 
function connection() {
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "classicmodels";
    
    // membuat koneksi
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
       
    // memeriksa koneksi
    if(! $conn) {
        die('Koneksi gagal: ' . mysqli_error());
    }
    
    return $conn;
}
?>