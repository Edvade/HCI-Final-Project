<?php
$title = $_POST["title"];
$content = $_POST["content"];
$genre = $_POST["genre"];

$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO message (title, content, genre)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

mysqli_stmt_prepare($stmt, $sql);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sss", $title, $content, $genre);

mysqli_stmt_execute($stmt);

header("Location: dashboard.php");
exit; 
?>