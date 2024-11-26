<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // hasil password

    //simpan data pengguna ke database
    //...

    //redirect ke halaman login
    header("Location: login.php");
}
?>

