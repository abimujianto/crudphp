<?php

include '../connetion/conn.php';

$id = $_POST['id_pelanggan'];
$nama = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin_pelanggan'];
$alamat    = $_POST['alamat_pelanggan'];
$telp    = $_POST['telpon_pelanggan'];

$query  = "UPDATE pelanggan_db SET id_pelanggan = '$id', nama_pelanggan = '$nama', jenis_kelamin_pelanggan = '$jenis_kelamin', alamat_pelanggan = '$alamat', telpon_pelanggan = '$telp'";
$query .= "WHERE id_pelanggan = '$id'";
$result = mysqli_query($conn, $query);

if($result){
    header("location: ../view/pelanggan_view/dashboard.php");
};
?>