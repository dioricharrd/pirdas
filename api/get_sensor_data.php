<?php
include 'db.php'; // Hubungkan dengan file db.php

// Ambil data dari database
$sql = "SELECT * FROM sensor_data ORDER BY id DESC LIMIT 100"; // Ambil 100 data terbaru
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Kirim data sebagai JSON
header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>
