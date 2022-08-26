<?php
session_start();
if(!isset($_SESSION["id_akun"])){
header("Location: login.php");
exit(); }
?>
