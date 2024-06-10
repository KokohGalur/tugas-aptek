<?php
$host = 'localhost';
$db = 'blog';
$user = 'root';
$pass = '';

$kon = mysqli_connect($host, $user, $pass, $db);

if (!$kon) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
