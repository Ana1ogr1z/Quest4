<?php
namespace Models;

include_once __DIR__ . "/../Models/Model.php";

use Models\Model;

class User extends Model {
    protected $table = 'users';

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $surname;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $message;

    /**
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }


    /**
     *
     * @return string
     */
    public function getSurname(): string {
        return $this->surname;
    }

    /**
     *
     * @param string $surname
     * @return self
     */
    public function setSurname(string $surname): self {
        $this->surname = $surname;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getEmail(): string {
        return $this->email;
    }

    /**
     *
     * @param string $email
     * @return self
     */
    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getMessage(): string {
        return $this->message;
    }

    /**
     *
     * @param string $email
     * @return self
     */
    public function setMessage(string $message): self {
        $this->message = $message;
        return $this;
    }
}
?>