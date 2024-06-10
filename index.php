<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Blog</h1>
    <a href="create.php" class="btn btn-primary">Tambah Postingan</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($kon, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                // Tambahkan link untuk menampilkan halaman artikel
                echo "<td><a href='article.php?id={$row['id']}'>{$row['title']}</a></td>";
                echo "<td>{$row['content']}</td>";
                echo "<td>{$row['created_at']}</td>";
                echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-warning'>Edit</a> ";
                echo "<a href='delete.php?id={$row['id']}' class='btn btn-danger'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
