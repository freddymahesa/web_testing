<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-success mb-3">Tambah Mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM mahasiswa");
            while ($row = $result->fetch_assoc()):
            ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nim'] ?></td>
                <td><?= $row['jurusan'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
