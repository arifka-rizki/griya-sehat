<?php
session_start();

if($_SESSION["adminlog"]!==true){
    header("location: index.html");
}

$idr= $_GET['idresv'];
$idp= $_GET['idpas'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Griya_Sehat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql= "UPDATE reservasi SET datang=true WHERE IDReservasi='$idr'";

if ($conn->query($sql) === TRUE) {
    $_SESSION["idr"]= $idr;
    $_SESSION["idp"]= $idp;

    $takesqlr= "SELECT Tanggal, dokter FROM reservasi where IDReservasi='$idr'";
    $resultr = $conn->query($takesqlr);
    $rowr = $resultr->fetch_assoc();

    $takesqlp= "SELECT Nama, Gender, Birthdate, Alamat FROM pasien where IDPasien='$idp'";
    $resultp = $conn->query($takesqlp);
    $rowp = $resultp->fetch_assoc();

    $_SESSION["namar"]= $rowp["Nama"];
    $_SESSION["gender"]= $rowp["Gender"];
    $_SESSION["tanggall"]= $rowp["Birthdate"];
    $_SESSION["alamat"]= $rowp["Alamat"];
    $_SESSION["tanggalp"]= $rowr["Tanggal"];
    $_SESSION["dokter"]= $rowr["dokter"];
    $_SESSION['reservtrue']=true;
    $conn->close();
    header("location: dashboardadmin.php");
} else {
    $conn->close();
    header("location: index.html");
}

$conn->close();

?>