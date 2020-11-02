<?php
include "../connetion/conn.php";
$id = $_GET["id_langganan"];

    $query = "DELETE FROM langganan_db WHERE id_langganan='$id'";
    $hasil_query = mysqli_query($conn, $query);

    if($hasil_query) {
    header("location:../view/langganan_view/dashboard.php");
    }