<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="comment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Comment Page</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php" style="color: black;
    font-size: 25px;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2px;">SoulShare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="homepage.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">LOGOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">WRITE A STORY</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password = "root";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

// Check if message_id is set in the URL
if (!isset($_GET["message_id"])) {
    die("Error: message_id is not set in the URL.");
}

$message_id = $_GET["message_id"];

// Function to get the details of the message
function getMessageDetails($messageId)
{
    global $conn;

    $sql = "SELECT * FROM message WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $messageId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        return $row;
    }

    return null;
}
?>
<div id="contentContainer">
        <?php
        // Display the details of the message
        $messageDetails = getMessageDetails($message_id);

        echo "<div class='message'>";
        echo "<h2>" . htmlspecialchars($messageDetails['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($messageDetails['content']) . "</p>";
        echo "<p>Genre: " . htmlspecialchars($messageDetails['genre']) . "</p>";
        echo "</div>";

        // Add a form for users to reply to the message
        echo "<form action='process-reply.php' method='post'>";
        echo "<input type='hidden' name='message_id' value='" . $message_id . "'>";
        echo "<textarea name='reply_text' placeholder='Your reply'></textarea>";
        echo "<input type='submit' value='Reply'>";
        echo "</form>";

        // Fetch and display existing comments
        $sqlComments = "SELECT * FROM comments WHERE message_id = ?";
        $stmtComments = mysqli_prepare($conn, $sqlComments);
        mysqli_stmt_bind_param($stmtComments, "i", $message_id);
        mysqli_stmt_execute($stmtComments);
        $resultComments = mysqli_stmt_get_result($stmtComments);

        while ($rowComment = mysqli_fetch_assoc($resultComments)) {
            echo "<div class='comment'>";
            echo "<p>" . htmlspecialchars($rowComment['comment_text']) . "</p>";
            echo "<div class='timestamp'>" . htmlspecialchars($rowComment['timestamp']) . "</div>";
            // Add other comment details as needed
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>