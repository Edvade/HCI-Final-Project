<?php
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);


if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message_id = $_POST["message_id"];
    $reply_text = $_POST["reply_text"];

    $sql = "INSERT INTO comments (message_id, comment_text, timestamp) VALUES (?, ?, CURRENT_TIMESTAMP)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "is", $message_id, $reply_text);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: comment.php?message_id=" . $message_id);
        exit;
    } else {
        die("Error: " . mysqli_error($conn));
    }
} else {
    die("Invalid request method.");
}
?>
