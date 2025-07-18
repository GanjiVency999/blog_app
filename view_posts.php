<?php
include 'db.php';

// Get all posts
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Posts</title>
</head>
<body>

<h2>All Blog Posts</h2>

<a href="add_post.php">+ Add New Post</a><br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    <?php 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['content'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "<td>
            <a href='edit_post.php?id=" . $row['id'] . "'>Edit</a> | 
            <a href='delete_post.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure?');\">Delete</a>
        </td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
