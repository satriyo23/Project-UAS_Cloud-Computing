<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM mahasiswa WHERE id=$id");
header("Location: index.php");
exit(); // It's good practice to add exit() after header()
?>