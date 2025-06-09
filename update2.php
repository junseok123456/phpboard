<?php
global $conn;
include 'db.php';

$id = $_GET['id'];
$title = $_GET['title'];
$name = $_GET['name'];
$contact = $_GET['contact'];
$email = $_GET['email'];
$company = $_GET['company'];
$position = $_GET['position'];

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

var_dump($sql);
echo "<br/>";
$stmt = $conn->prepare($sql);
var_dump($stmt);
echo "<br/>";

$stmt->bind_param("ssssssi", $title, $name, $contact, $email, $company, $position, $id);
var_dump($stmt);
echo "<br/>";

$stmt->execute();
var_dump($stmt);
echo "<br/>";

/*header("Location: show.php?id=" . $id);*/