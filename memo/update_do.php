<?php
require('dbconnect.php');

$stmt = $db->prepare('update memos set memo=? where id=?');
if (!$stmt) {
    die($db->error);
}
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$memo = htmlspecialchars($_POST['memo'], ENT_COMPAT, 'UTF-8');
$stmt->bind_param('si', $memo, $id);
$success = $stmt->execute();
if (!$success) {
    die($db->error);
}
header('Location: memo.php?id=' . $id);
?>