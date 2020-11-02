<?php
$host = "localhost";
$username = "root";
$pw = "";
$database = "mynotescode";
$conn = mysqli_connect($host, $username, $pw, $database);

if(!$conn){
    die("Gagal terhubung: " . mysqli_connect_error());
}
?>