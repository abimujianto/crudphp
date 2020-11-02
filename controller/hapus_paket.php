<?php
include "../connetion/conn.php";
$id_paket = $_GET["id_paket"];

    $query = "DELETE FROM paket_db WHERE id_paket='$id_paket' ";
    $hasil_query = mysqli_query($conn, $query);

    if($hasil_query) {
    header("location:../view/paket_view/dashboard.php");
    }