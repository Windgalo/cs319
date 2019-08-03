<?php
session_start();
session_unset();
session_destroy();

setcookie("username", "", time() - 3600, "/");
setcookie("date", "", time() - 3600, "/");

header("Location: view.php");
?>

<!-- 
Code by Grant Forss Abigail Roland
-->