<?php
include 'db.php';

$title = $_POST['title'];
$content = $_POST['content'];

$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

if (mysqli_query($kon, $sql)) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($kon);
}
?>
