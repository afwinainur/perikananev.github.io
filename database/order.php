<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perikanan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $namaPembeli = $_POST['namaPembeli'];
    $jenisIkan = $_POST['jenisIkan'];
    $jumlahKg = $_POST['jumlahKg'];
    $totalHarga = $_POST['totalHarga'];

    $sql = "INSERT INTO orders (nama_pembeli, jenis_ikan, jumlah_kg, total_harga) VALUES ('$namaPembeli', '$jenisIkan', $jumlahKg, $totalHarga)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
header("Location: ../index.html")
    ?>