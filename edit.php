<?php
include 'db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt -> bind_param("i", $id);
$stmt -> execute();
$result = $stmt -> get_result();
$post = $result -> fetch_assoc();
?>

<h1>게시글 수정</h1>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    제목: <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br>
    내용: <br><textarea name="content"><?= htmlspecialchars($post['content']) ?></textarea><br>
    <button type="submit">수정</button>
</form>
<a href="index.php">목록으로</a>