<?php
include 'db.php'; // Hubungkan dengan file db.php

// Ambil data dari POST
$data = json_decode(file_get_contents("php://input"), true);
$accelX = $data['accelX'];
$accelY = $data['accelY'];
$accelZ = $data['accelZ'];
$totalAccel = $data['totalAccel'];
$analogInput = $data['analogInput'];

// Simpan data ke database
$sql = "INSERT INTO sensor_data (accelX, accelY, accelZ, totalAccel, analogInput, timestamp)
        VALUES ('$accelX', '$accelY', '$accelZ', '$totalAccel', '$analogInput', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
