<?php
session_start();

session_unsert();
session_destroy();

header("Location: login.php");

?>