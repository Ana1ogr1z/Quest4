<?php

namespace Models;

include_once __DIR__ . "/../Models/Model.php";

use Models\Model;

class Review extends Model {

    /**
     * @var string
     */
    protected $table = 'reviews';

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $comment;

    /**
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * 
     * @return string
     */
     public function getAddress(): string {
        return $this->address;
    }

    /**
     * 
     * @return string @address
     */
    public function setAddress(string $address): self {
        $this->address = $address;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     *
     * @param string $comment
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

}
?>