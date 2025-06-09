<?php
include 'db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?>

<h1><?= htmlspecialchars($row['title']) ?></h1>
<p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
<a href="edit.php?id=<?= $row['id'] ?>">수정</a>
<a href="delete.php?id=<?= $row['id'] ?>">삭제</a>
<a href="index.php">목록</a>