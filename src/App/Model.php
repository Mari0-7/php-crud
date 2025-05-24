<?php
declare(strict_types=1);
namespace App;

abstract class Model
{
    protected DB $db;

    public function __construct()
    {
        $this->db = App::db();
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->db, $name], $arguments);
    }
}