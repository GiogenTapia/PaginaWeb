<?php

session_start();
session_destroy();
header("location: ../html/login.php");
exit();
?>
