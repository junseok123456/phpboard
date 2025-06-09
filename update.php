<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $title, $content, $id);
$stmt->execute();

header("Location: show.php?id=" . $id);