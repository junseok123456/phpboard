<?php
global $conn;
include 'db.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    $sql = "DELETE FROM inquiries WHERE id = ?";
    var_dump($sql);
    echo "<br/>";
    $stmt = $conn->prepare($sql);
    var_dump($stmt);
    echo "<br/>";
    $stmt->bind_param("i", $id);
    var_dump($stmt);
    echo "<br/>";
    $stmt->execute();
    var_dump($stmt);
    echo "<br/>";
}

/*header("Location: index.php");
exit;*/
?>


<!--/phpboard/delete.php?id=?-->