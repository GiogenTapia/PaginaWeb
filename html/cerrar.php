<?php

session_start();
$nombre= $_SESSION[null];
session_destroy();
header("location: login.php");
exit();
?>
