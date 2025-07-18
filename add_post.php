<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $sql)) {
        echo "Post added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post" action="">
    <label>Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="5" cols="30" required></textarea><br><br>

    <input type="submit" value="Add Post">
</form>
