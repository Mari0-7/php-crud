<?php

declare(strict_types=1);

namespace App;

use PDO;

class DB
{

    private PDO $pdo;

    public function __construct(array $config)
    {
        try {
            $this->pdo = new PDO(
                $config['driver'] . ':host=' . $config['host'] . ';dbname=' . $config['database'],
                $config['user'],
                $config['pass'],
                $config['options'] ?? [PDO::ATTR_EMULATE_PREPARES => false, PDO::FETCH_ASSOC => true]
            );
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int) $e->getCode());
        }
    }
    public function __call(string $name, array $arguments)
    {

       return call_user_func_array([$this->pdo, $name], $arguments);
    }
}
