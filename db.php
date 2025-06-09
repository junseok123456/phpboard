<?php
/*
$host = '127.0.0.1';
$db   = 'board';
$user = 'root';
$pass = '1234';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];*/

$host = '127.0.0.1';
$user = 'root';
$pass = '1234';
$dbname = 'board';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}


