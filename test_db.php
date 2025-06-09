<?php
require_once 'db.php';

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "✅ DB 연결 성공!";
} catch (PDOException $e) {
    echo "❌ DB 연결 실패: " . $e->getMessage();
}
