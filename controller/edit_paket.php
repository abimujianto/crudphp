<?php

include '../connetion/conn.php';

$id_paket = $_POST['id_paket'];
$nama_paket = $_POST['nama_paket'];
$internet = $_POST['internet'];
$useeTv    = $_POST['useetv'];
$kategori    = $_POST['kategori'];
$price    = $_POST['price'];
$pajak    = $_POST['pajak'];

$query  = "UPDATE paket_db SET id_paket = '$id_paket', nama_paket = '$nama_paket', internet = '$internet', useetv = '$useeTv', kategori = '$kategori'";
$query .= "WHERE id_paket = '$id_paket'";
$result = mysqli_query($conn, $query);

if($result){
    header("location: ../view/paket_view/dashboard.php");
};
?>