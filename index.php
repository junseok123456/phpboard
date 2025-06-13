<?php
global $conn;
include 'db.php';
?>
<h1>게시글 목록</h1>
<a href="create.php">글쓰기</a>
<hr>

<?php
$sql = "
    SELECT 
        * 
    FROM 
        inquiries 
    ORDER BY 
        id DESC
      ";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<p><a href='show.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></p>";
}
?>
