<?php
$host = "localhost";       // Host database Anda (misalnya: localhost)
$user = "root";            // Username database Anda
$password = "";            // Password database Anda
$database = "iot";         // Nama database Anda

// Koneksi ke database
$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
