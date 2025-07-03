<?php include 'db.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>
    <?php
    $data = $conn->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();
    ?>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
        NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
        <button type="submit">Update</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $conn->query("UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id=$id");
        header("Location: index.php");
        exit(); // It's good practice to add exit() after header()
    }
    ?>
</body>
</html>