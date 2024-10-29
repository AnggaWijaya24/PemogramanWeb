<?php
include "latihan2.php";
$_GET['npm'] = '23441200';
$_GET['nama'] = 'Muhammad Ashar Aryadi';
$_GET['prodi'] = 'Sistem Informasi';
$query = "INSERT INTO biodata (npm, nama, prodi)
VALUES ('23441200', 'Muhammad Ashar Aryadi', 'Sistem Informasi')";
$mysqli->query($query);

?>