<?php 
 
$server = "localhost";
$user = "admin";
$pass = "kondeman123";
$database = "databarang";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>