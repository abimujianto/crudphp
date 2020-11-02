<?php

include "../connetion/conn.php";

$id = $_POST['id_paket'];
$nama = $_POST['nama_paket'];
$internet = $_POST['internet'];
$useeTv = $_POST['useetv'];
$kategory = $_POST['kategori'];
$price = $_POST['price'];
$pajak = $_POST['pajak'];


$REQ="INSERT INTO paket_db(id_paket, nama_paket, internet, useetv, kategori,price, pajak ) VALUES ('$id','$nama','$internet','$useeTv','$kategory', '$price', '$pajak')";
$result = mysqli_query($conn, $REQ);
if($result){
    header("location: ../view/paket_view/dashboard.php");
};
?>