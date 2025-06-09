<?php
global $conn;
include 'db.php';

$title = $_POST['title'] ?? '';
$name = $_POST['name'] ?? '';
$contact = $_POST['contact'] ?? '';
$email = $_POST['email'] ?? '';
$company = $_POST['company'] ?? '';
$position = $_POST['position'] ?? '';

$sql = "
    INSERT INTO inquiries (
        title, 
        name, 
        contact, 
        email, 
        company, 
        position
        ) VALUES (
            ?, ?, ?, ?, ?, ?
            )
       ";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo "fail";
    exit;
}
$stmt->bind_param("ssssss", $title, $name, $contact, $email, $company, $position);
$success = $stmt->execute();

echo $success ? "success" : "fail";
