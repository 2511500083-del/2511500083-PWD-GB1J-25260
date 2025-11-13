<?php
session_start();
$sesnim = $_POST["txtNim"];
$sesnama = $_POST["txtNama"];
$sestempat = $_POST["txtTempat"];
$sestanggal = $_POST["txtTanggal"];
$seshobi = $_POST["txtHobi"];
$sespasangan = $_POST["txtPasangan"];
$sespekerjaan = $_POST["txtPekerjaan"];
$sesnama_orangtua = $_POST["txtNama_Orangtua"];
$sesnama_kakak = $_POST["txtNama_Kakak"];
$sesnama_adik = $_POST["txtNama_Adik"];
$_SESSION["sesnim"] = $sesnim;
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sestempat"] = $sestempat;
$_SESSION["sestanggal"] = $sestanggal;
$_SESSION["seshobi"] = $seshobi;
$_SESSION["sespasangan"] = $sespasangan;
$_SESSION["sespekerjaan"] = $sespekerjaan;
$_SESSION["sesnama_orangtua"] = $sesnama_orangtua;
$_SESSION["sesnama_kakak"] = $sesnama_kakak;
header("location: index.php");
?>