<?php

namespace Controllers;

include_once __DIR__ . "/Controller.php";
include_once __DIR__ . "/../Models/Review.php";

use Controllers\Controller;
use Models\Review;

class ReviewController extends Controller
{
    /**
     * @var Review
     */
    private $review;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->review = new Review();
    }

     /**
     * {@inheritDoc}
     */
    protected function layout(): string
    {
        $id = (int) ($_GET['id'] ?? 0);
        $review = [];

        if ($id) {
            $review = $this->review->findOne($id);
        }

        return $this->getForm($review);
    }

    /**
     * @return void
     */
    public function update(): void
{
    session_start();
    
    $id = (int) ($_POST['id'] ?? 0);

    if ($id) {
        $this->review
            ->setName(htmlspecialchars($_POST['name'] ?? ''))
            ->setComment(htmlspecialchars($_POST['comment'] ?? ''))
            ->setAddress(htmlspecialchars($_POST['address'] ?? ''))
            ->setId($id)
            ->update();
            
        $_SESSION['success_message'] = 'Данные успешно обновлены!';
    } else {
        $_SESSION['error_message'] = 'Ошибка обновления: не указан ID';
    }

    header('Location: index.php');
    exit;
}

    /**
     * @return void
     */
    public function delete(): void
    {
        $id = (int) $_POST['id'];

        if ($id) {
            $this->getReview()
                ->setId($id)
                ->delete();
        }

        header('Location: index.php');
    }

    /**
     * @param array $review
     * @return string
     */
    private function getForm(array $review): string
    {
        return $this->template('Templates/ReviewLayout/EditForm.php', ['review' => $review]);
    }

    /**
     *
     * @return Review
     */
    public function getReview(): Review
    {
        return $this->review;
    }
}
?>