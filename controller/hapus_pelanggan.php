<?php
include "../connetion/conn.php";
$id_pelanggan = $_GET["id_pelanggan"];

    $query = "DELETE FROM pelanggan_db WHERE id_pelanggan='$id_pelanggan' ";
    $hasil_query = mysqli_query($conn, $query);

    if($hasil_query) {
    header("location:../view/pelanggan_view/dashboard.php");
    }