<?php
session_start();

use Controllers\UserController;
use Controllers\ReviewController;

$entity = $_GET['entity'] ?? $_POST['entity'] ?? null;
$id = $_GET['id'] ?? $_POST['id'] ?? null;

if (!$entity || !$id) {
    $_SESSION['error_message'] = 'Не указаны необходимые параметры';
    header('Location: index.php');
    exit;
}

$allowedEntities = ['review', 'user'];
if (!in_array($entity, $allowedEntities)) {
    $_SESSION['error_message'] = 'Неверный тип сущности';
    header('Location: index.php');
    exit;
}

if ($entity === 'user') {
    include_once __DIR__ . "/Controllers/UserController.php";
    (new UserController())->delete();
} else {
    include_once __DIR__ . "/Controllers/ReviewController.php";
    (new ReviewController())->delete();
}
?>