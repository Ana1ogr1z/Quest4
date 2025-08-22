<?php

namespace Controllers;

include_once __DIR__ . "/Controller.php";
include_once __DIR__ . "/../Models/User.php";

use Controllers\Controller;
use Models\User;

class UserController extends Controller
{
    /**
     * @var User
     */
    private $user;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * {@inheritDoc}
     */
    protected function layout(): string
    {
        $id = (int) ($_GET['id'] ?? 0);
        $user = [];

        if ($id) {
            $user = $this->user->findOne($id);
        }

        return $this->template('Templates/UserLayout/EditForm.php', ['user' => $user]);
    }

    /**
     * @return void
     */
    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);

        if ($id) {
            $this->user
                ->setName(htmlspecialchars($_POST['name'] ?? ''))
                ->setSurname(htmlspecialchars($_POST['surname'] ?? ''))
                ->setEmail(htmlspecialchars($_POST['email'] ?? ''))
                ->setId($id)
                ->update();
        }

        header('Location: index.php');
        exit;
    }

    /**
     * @return void
     */
    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);

        if ($id) {
            $this->user
                ->setId($id)
                ->delete();
        }

        header('Location: index.php');
        exit;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    public function create(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->user
                ->setName(htmlspecialchars($_POST['name'] ?? ''))
                ->setSurname(htmlspecialchars($_POST['surname'] ?? '')) 
                ->setEmail(htmlspecialchars($_POST['email'] ?? ''))
                ->create();

            header('Location: index.php');
            exit;
        }
    }
    
}
?>