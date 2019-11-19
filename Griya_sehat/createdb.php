<?php
$servername = "localhost";
$username = "root";
$password = "jjoyul";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Griya_Sehat";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE Pasien (
    IDPasien INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(50) NOT NULL,
    Gender  VARCHAR(10) NOT NULL,
    Birthdate date NOT NULL,
    Alamat VARCHAR(50) NOT NULL,
    Riwayat VARCHAR(20)
    )";
    
if ($conn->query($sql) === TRUE) {
    echo "Table Pasien created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE Reservasi (
    IDReservasi INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    IDPasien INT(6) UNSIGNED NOT NULL,
    Tanggal datetime NOT NULL,
    Keluhan VARCHAR(20),
    dokter VARCHAR(30) NOT NULL,
    datang boolean NOT NULL DEFAULT FALSE,
    antrian INT(6) UNSIGNED NOT NULL,
    constraint fk_pasien
    foreign key (IDPasien)
        references Pasien(IDPasien)
    )";
    
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>