<?php

include "../connetion/conn.php";

$id = $_POST['id_langganan'];
$pelangganid = $_POST['pelanggan_id'];
$paketid = $_POST['paket_id'];
$tanggal = $_POST['tanggal'];



$REQ="INSERT INTO langganan_db(id_langganan, pelanggan_id, paket_id, tanggal) VALUES ('$id','$paketid','$pelangganid','$tanggal')";
$result = mysqli_query($conn, $REQ);
if($result){
    header("location: ../view/langganan_view/dashboard.php");
}else{
    echo "<p>Gagal</p>";
};
?>