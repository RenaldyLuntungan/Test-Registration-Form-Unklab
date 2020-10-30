<?php
session_start();

$id_collages = $_SESSION["id_collages"];

include("config.php");
$result = mysqli_query($mysqli, "INSERT INTO transaksi(id_collages,status_transaksi)
            VALUES ('$id_collages','Belum Lunas')");
             header("Location: checkout.php");
?>