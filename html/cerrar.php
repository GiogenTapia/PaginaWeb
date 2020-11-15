<?php

session_start();
$nombre= $_SESSION[''];
session_destroy();
header("location: login.php");
exit();
?>
