<?php
$host = 'localhost'; // Replace with your actual database host
$user = 'root'; // Replace with your database username
$pass = ''; // Replace with your database password
$db = 'cloud_crud'; // Replace with your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>