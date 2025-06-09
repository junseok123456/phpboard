<?php
include 'db.php';
$id = $_GET['id'];

$sql = "SELECT * FROM inquiries WHERE id = $id";
$result = $conn -> query($sql);
$row = $result -> fetch_assoc();
?>

<h1>제목 : <?= htmlspecialchars($row['title']) ?></h1>
<p><strong>이름 :</strong> <?= nl2br(htmlspecialchars($row['name'])) ?></p>
<p><strong>내용 :</strong> <?= nl2br(htmlspecialchars($row['contact'])) ?></p>
<p><strong>이메일 :</strong> <?= nl2br(htmlspecialchars($row['email'])) ?></p>
<p><strong>회사 :</strong> <?= nl2br(htmlspecialchars($row['company'])) ?></p>
<p><strong>직급 :</strong> <?= nl2br(htmlspecialchars($row['position'])) ?></p>
<a href="edit.php?id=<?= $row['id'] ?>">수정</a>
<form action="delete.php" method="post" onsubmit="return confirm('정말 삭제하시겠습니까?');" style="display:inline;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <button type="submit" style="all:unset; color:blue; text-decoration:underline; cursor:pointer;">삭제</button>
</form>
<a href="index.php">목록</a>