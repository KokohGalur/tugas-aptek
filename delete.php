<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id=$id";

if (mysqli_query($kon, $sql)) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($kon);
}
?>
