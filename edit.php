<?php
global $conn;
include 'db.php';

$id = $_GET['id'];

$sql = "
SELECT 
    * 
FROM 
    inquiries 
WHERE 
    id = ?
    ";

$stmt = $conn->prepare($sql);
$stmt -> bind_param("i", $id);
$stmt -> execute();
$result = $stmt -> get_result();
$post = $result -> fetch_assoc();
?>

<h1>게시글 수정</h1>
<form id="updateForm" action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    제목: <br><input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br>
    작성자: <br><input type="text" name="name" value="<?= htmlspecialchars($post['name']) ?>" <br><br>
    내용: <br><textarea name="contact"><?= htmlspecialchars($post['contact']) ?></textarea><br>
    이메일: <br><input type="email" name="email" value="<?= htmlspecialchars($post['email']) ?>"<br><br>
    회사: <br><input type="text" name="company" value="<?= htmlspecialchars($post['company']) ?>"<br><br>
    직급: <br><input type="text" name="position" value="<?= htmlspecialchars($post['position']) ?>"<br><br>
    <br> <button type="submit">수정</button>
</form>
<a href="index.php">목록</a>

<script>
    document.getElementById('updateForm').addEventListener('submit', function(e) {
        if (!confirm('수정하시겠습니까?')) {
            e.preventDefault();
        }
    });
</script>