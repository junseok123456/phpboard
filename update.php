<?php
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$company = $_POST['company'];
$position = $_POST['position'];

$sql = "UPDATE inquiries SET title = ?, SET name = ?, contact = ?, SET email = ?, SET company = ?, SET position = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $title, $content, $id);
$stmt->execute();

header("Location: show.php?id=" . $id);