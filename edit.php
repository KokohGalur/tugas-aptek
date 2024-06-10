<?php
include 'db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$result = mysqli_query($kon, $sql);
$post = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Postingan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Edit Postingan</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
        </div>
        <div class="form-group">
            <label>Konten</label>
            <textarea name="content" class="form-control" required><?php echo $post['content']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
