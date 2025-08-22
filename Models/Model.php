<?php

namespace Models;

include_once __DIR__ . "/../Core/Config.php";

use mysqli;
use Core\Config;

abstract class Model extends Config
{
    /**
     * @var array
     */
    private const DIFFERENT_PROPERTY = [
        'table' => null,
        'connect' => null,
        'user' => null,
        'password' => null,
        'server' => null,
        'db_name' => null,
        'id' => null,
    ];

    /**
     * @var mysqli
     */
    protected $connect;

    /**
     * @var string
     */
    protected $table = '';

    /**
     * @var int
     */
    public $id = 0;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->connect = mysqli_connect($this->server, $this->user, $this->password, $this->db_name);

        if (!$this->connect) {
            die("Connection fail");
        }

        mysqli_set_charset($this->connect, "utf8");
    }

    /**
     *
     * @param int $id
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function findAll(): array
    {
        $select = "SELECT * FROM `" . $this->table . "`";

        $result = mysqli_query($this->connect, $select);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $rows;
    }

    /**
     *
     * @return void
     */
    public function delete(): void
    {
        $id = $this->getId();

        if ($id) {
            $delete = "DELETE FROM `" . $this->table . "` where `id` = '" . $id . "'";

            mysqli_query($this->connect, $delete);
        }
    }

    /**
     * @param array
     * @return void
     */
    public function update(): void
    {
        $properties = array_diff_key(get_object_vars($this), self::DIFFERENT_PROPERTY);

        $properties_implode = [];

        foreach ($properties as $key => $value) {
            $properties_implode[] = "`" . $key . "` = '" . $value . "'";
        }

        if ($properties_implode) {
            $update = "UPDATE `" . $this->table . "` SET " . implode(', ', $properties_implode) . " WHERE `id` = '" . $this->getId() . "'";

            mysqli_query($this->connect, $update);
        }
    }

    /**
     *
     * @param string $id
     * @return array
     */
    public function findOne(string $id): array
    {
        $select = "SELECT * FROM `" . $this->table . "` where id = '" . $id . "'";

        $result = mysqli_query($this->connect, $select);

        return  mysqli_fetch_assoc($result);
    }

    /**
     * 
     * @param array
     * @return void
     */
    public function create(): void
{
    $properties = array_diff_key(get_object_vars($this), self::DIFFERENT_PROPERTY);
    
    $columns = [];
    $values = [];
    
    foreach ($properties as $key => $value) {
        $columns[] = "`$key`";
        $values[] = "'" . mysqli_real_escape_string($this->connect, $value) . "'";
    }
    
    if (!empty($columns)) {
        $insert = "INSERT INTO `{$this->table}` (" . implode(', ', $columns) . ") 
                  VALUES (" . implode(', ', $values) . ")";
        mysqli_query($this->connect, $insert);
    }
}
}
?>