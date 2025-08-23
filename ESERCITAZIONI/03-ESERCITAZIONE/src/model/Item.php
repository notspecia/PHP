<?php

namespace App\model;

use PDO;


class item
{
    private int $id;
    private string $title;
    private string $description;
    private string $size;
    private float $price;
    private string $image;

    public function __construct() {}


    public function __get($name)
    {
        return $this->$name;
    }


    public function set($name, $value)
    {
        $this->$name = $value;
    }
}
