<?php
session_start();
include_once __DIR__ . "/Controllers/ReviewCreateController.php";

use Controllers\ReviewCreateController;

try {
    (new ReviewCreateController())->create();
    $_SESSION['success_message'] = 'Отзыв успешно добавлен!';
} catch (Exception $e) {
    $_SESSION['error_message'] = 'Ошибка при добавлении отзыва: ' . $e->getMessage();
}

header('Location: index.php');
exit;
?>