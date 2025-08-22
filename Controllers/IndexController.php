<?php

namespace Controllers;

include_once __DIR__ . "/../Models/Review.php";
include_once __DIR__ . "/../Models/User.php";
include_once __DIR__ . "/Controller.php";

use Controllers\Controller;
use Models\Review;
use Models\User;

class IndexController extends Controller {

    /**
     *
     * @return string
     */
    private function getOrderBlock(): string
    {
        return $this->template('Templates/IndexLayout/orderBlock.php');
    }

     /**
     *
     * @return string
     */
    private function getMakeReviewBlock(): string
    {
        return $this->template('Templates/IndexLayout/makeReviewBlock.php');
    }

     /**
     *
     * @return string
     */
    private function getMakeUserBlock(): string
    {
        return $this->template('Templates/IndexLayout/makeUserBlock.php');
    }

     /**
     *
     * @return string
     */
    private function getUserInfoBlock(): string
    {
        return $this->template('Templates/IndexLayout/userInfoBlock.php');
    }

    /**
     *
     * @return string
     */
    private function getReviews(): string
{
    $reviews = (new Review())->findAll();

    return $this->template('Templates/IndexLayout/reviewBlock.php', ['reviews' => $reviews]);
}
    /**
     *
     * @return string
     */
    private function getUsers(): string
    {
        $user = new User();

        $users = $user->findAll();

        return $this->template('Templates/IndexLayout/Users.php', ['users' => $users]);
    }

    /**
     * {@inheritDoc}
     */
    protected function layout(): string
    {
        $users = $this->getUsers();
        $userInfoBlock = $this->getUserInfoBlock();
        $orderBlock = $this->getOrderBlock();
        $comments = $this->getReviews();
        $makeReviewBlock = $this->getMakeReviewBlock();
        $makeUserBlock = $this->getMakeUserBlock();

        return $this->template('Templates/IndexLayout/Layout.php', [
            'users' => $users,
            'userInfoBlock' => $userInfoBlock,
            'orderBlock' => $orderBlock,
            'comments' => $comments,
            'makeReviewBlock' => $makeReviewBlock,
            'makeUserBlock' => $makeUserBlock,
        ]);
    }
}
?>