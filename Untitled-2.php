<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE posts SET title='$title', content='$content' WHERE id=$id";

if (mysqli_query($kon, $sql)) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($kon);
}
?>
