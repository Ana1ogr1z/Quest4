<?php

use Controllers\UserController;
use Controllers\ReviewController;

$entity = $_GET['entity'] ?? 'review';

if ($entity === 'user') {
    include_once __DIR__ . "/Controllers/UserController.php";

    (new UserController())->view();
} else {
    include_once __DIR__ . "/Controllers/ReviewController.php";

    (new ReviewController())->view();
}
?>