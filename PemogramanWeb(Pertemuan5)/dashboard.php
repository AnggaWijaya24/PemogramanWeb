<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

echo "Selamat Datang " . $_SESSION['username']."!";

echo "<br><a href='logout.php'>Logout</a>";

?>