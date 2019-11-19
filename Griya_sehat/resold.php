<?php
session_start();
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

$idpasien = filter_input(INPUT_POST, 'nomorpas');
$tanggalperiksa = filter_input(INPUT_POST, 'tanggalp');
$dokter = filter_input(INPUT_POST, 'doctor');

$takesql = "SELECT Nama FROM Pasien where IDPasien='$idpasien'";
$result = $conn->query($takesql);
$row = $result->fetch_assoc();
$nama = $row["Nama"];

$checkantri = "SELECT * from reservasi where Tanggal='$tanggalperiksa'";
$resulta = $conn->query($checkantri);
$jumlah = $resulta->num_rows + 1;

$sql = "INSERT INTO reservasi (IDPasien, Tanggal, Dokter, antrian)
VALUES ('$idpasien', '$tanggalperiksa', '$dokter', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    $idreser = $conn->insert_id;
    $_SESSION["nama"]= $nama;
    $_SESSION["idpasien"]= $idpasien;
    $_SESSION["tanggal"]= $tanggalperiksa;
    $_SESSION["idreserv"]= $idreser;
    $_SESSION["nomorantri"]= $jumlah;
    $conn->close();
    header("location: reservasi-berhasil.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>