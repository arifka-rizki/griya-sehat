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

$nama = filter_input(INPUT_POST, 'nama-pasien');
$gender = filter_input(INPUT_POST, 'jenis-kelamin');
$tanggallahir = filter_input(INPUT_POST, 'tanggal-lahir');
$alamat = filter_input(INPUT_POST, 'alamat-pasien');
$tanggalperiksa = filter_input(INPUT_POST, 'tanggal-periksa');
$dokter = filter_input(INPUT_POST, 'Dokter');

$sql = "INSERT INTO pasien (Nama, Gender, Birthdate, Alamat)
VALUES ('$nama', '$gender', '$tanggallahir', '$alamat')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$checkantri = "SELECT * from reservasi where Tanggal='$tanggalperiksa'";
$resulta = $conn->query($checkantri);
$jumlah = $resulta->num_rows + 1;

$sql = "INSERT INTO reservasi (IDPasien, Tanggal, Dokter, antrian)
VALUES ('$last_id', '$tanggalperiksa', '$dokter', '$jumlah')";


if ($conn->query($sql) === TRUE) {
    $idreser = $conn->insert_id;
    $_SESSION["nama"]= $nama;
    $_SESSION["idpasien"]= $last_id;
    $_SESSION["tanggal"]= $tanggalperiksa;
    $_SESSION["idreserv"]= $idreser;
    $_SESSION["nomorantri"]= $jumlah;
    $conn->close();
    header("location: reservasi-berhasil.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}

$conn->close();
?>