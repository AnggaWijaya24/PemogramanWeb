<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    if(password_verify($password, $hashed_password_from_database)){

        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }else{

        echo "Password yang anda masukkan salah";
    }
}
?>