<?php
require 'conecting.php';

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('DELETE FROM barang WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    header('Location: index.php');
    exit;
}
?>