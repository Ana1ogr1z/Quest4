<?php

namespace Controllers;

include_once __DIR__ . "/Controller.php";
include_once __DIR__ . "/../Models/Review.php";

use Controllers\Controller;
use Models\Review;

class ReviewCreateController extends Controller
{
    private $review;

    public function __construct()
    {
        $this->review = new Review();
    }
    
    /**
     * 
     * @return void
     */
    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->review
                ->setName(htmlspecialchars($_POST['fullnameReview'] ?? ''))
                ->setAddress(htmlspecialchars($_POST['addressReview'] ?? '')) 
                ->setComment(htmlspecialchars($_POST['messageReview'] ?? ''))
                ->create();

            header('Location: index.php');
            exit;
        }
    }

    protected function layout(): string
    {
        return '';
    }
}
?>