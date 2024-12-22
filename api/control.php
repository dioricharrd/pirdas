<?php
session_start(); // Gunakan session untuk menyimpan status perangkat
include 'db.php'; // Hubungkan dengan database jika perlu

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Ambil status perangkat
    echo isset($_SESSION['device_status']) ? $_SESSION['device_status'] : "OFF";
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Set status perangkat
    $data = json_decode(file_get_contents("php://input"), true);
    $_SESSION['device_status'] = $data['status'];
    echo "Status perangkat diperbarui menjadi: " . $_SESSION['device_status'];
}
?>
