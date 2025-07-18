<?php
include 'db.php';

// Get post ID from URL
$id = $_GET['id'];

// Delete the post from database
$sql = "DELETE FROM posts WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Post deleted successfully! <a href='view_posts.php'>Go Back</a>";
} else {
    echo "Error deleting post: " . mysqli_error($conn);
}
?>