<?php
include 'db.php';

// Periksa apakah ID atau slug artikel disediakan melalui parameter GET
if(isset($_GET['id']) || isset($_GET['slug'])) {
    // Jika ID artikel disediakan, gunakan ID untuk query
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id=$id";
    }
    // Jika slug artikel disediakan, gunakan slug untuk query
    else if(isset($_GET['slug'])) {
        $slug = $_GET['slug'];
        $sql = "SELECT * FROM posts WHERE slug='$slug'";
    }

    // Eksekusi query
    $result = mysqli_query($kon, $sql);

    // Periksa apakah artikel ditemukan
    if(mysqli_num_rows($result) > 0) {
        $post = mysqli_fetch_assoc($result);
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title><?php echo $post['title']; ?></title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
        <div class="container">
            <h1 class="mt-5"><?php echo $post['title']; ?></h1>
            <p><?php echo $post['content']; ?></p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
        </body>
        </html>
<?php
    } else {
        // Jika artikel tidak ditemukan, tampilkan pesan kesalahan
        echo "Artikel tidak ditemukan.";
    }
} else {
    // Jika ID atau slug artikel tidak disediakan, tampilkan pesan kesalahan
    echo "ID atau slug artikel tidak diberikan.";
}
?>
