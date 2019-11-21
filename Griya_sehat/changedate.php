<?php
session_start();

$_SESSION["datex"]= filter_input(INPUT_POST, 'tanggal');
$_SESSION["checkdate"]= true;

header('location: daftarreservasi.php');

?>