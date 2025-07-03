<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah</title>
</head>
<body>
    <h2>Tambah Mahasiswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama"><br>
        NIM: <input type="text" name="nim"><br>
        <button type="submit">Simpan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $conn->query("INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')");
        header("Location: index.php");
        exit(); // It's good practice to add exit() after header()
    }
    ?>
</body>
</html>