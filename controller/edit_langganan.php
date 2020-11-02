<?php

include '../connetion/conn.php';

$id = $_POST['id_langganan'];
$pelangganid = $_POST['pelanggan_id'];
$paketid = $_POST['paket_id'];
$tanggal = $_POST['tanggal'];


$query  = "UPDATE langganan_db SET id_langganan = '$id', pelanggan_id = '$pelangganid', paket_id = '$paketid', tanggal = '$tanggal'";
$query .= "WHERE id_langganan = '$id'";
$result = mysqli_query($conn, $query);

if($result){
    header("location: ../view/langganan_view/dashboard.php");
};
?>