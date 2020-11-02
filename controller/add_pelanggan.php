<?php

include "../connetion/conn.php";

$id = $_POST['id_pelanggan'];
$nama = $_POST['nama_pelanggan'];
$jenis_kelamin = $_POST['jenis_kelamin_pelanggan'];
$alamat = $_POST['alamat_pelanggan'];
$telp = $_POST['telpon_pelanggan'];

$REQ="INSERT INTO pelanggan_db(id_pelanggan, nama_pelanggan, jenis_kelamin_pelanggan, alamat_pelanggan, telpon_pelanggan) VALUES ('$id','$nama','$jenis_kelamin','$alamat','$telp')";
$result = mysqli_query($conn, $REQ);
if($result){
    header("location: ../view/pelanggan_view/dashboard.php");
};
?>