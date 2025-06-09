<?php
global $conn;
include 'db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$company = $_POST['company'];
$position = $_POST['position'];

$sql = "
UPDATE inquiries SET
    title = ?, 
    name = ?, 
    contact = ?, 
    email = ?, 
    company = ?, 
    position = ? 
  WHERE id = ?
  ";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $title, $name, $contact, $email, $company, $position, $id);
$stmt->execute();

header("Location: show.php?id=" . $id);