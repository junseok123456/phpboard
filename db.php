<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '1234';
$dbname = 'board';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}


