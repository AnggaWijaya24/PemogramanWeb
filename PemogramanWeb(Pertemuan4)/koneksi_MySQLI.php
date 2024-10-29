<?php
$mysqli = new mysqli("localhost", "root", "",
"laporan_penjualan");

if ($mysqli->connect_error) {
     die("Koneksi gagal: " . $mysqli->connect_error);
    } else {
    }
?>