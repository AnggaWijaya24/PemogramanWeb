<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=mahasiswa", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"berhasilakn koneksi";
} catch (PDOException $e) {
    echo"koneksi gagal : " . $e->getMessage();
}
?>