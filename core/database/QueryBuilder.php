<?php

namespace App\Core\Database;

use Exception;
use PDO;
use PDOException;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function insert($table, $values)
    {
        if (empty($values)) {
            throw new Exception;
        }

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($values)),
            ':' . implode(', :', array_keys($values))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($values);
        } catch (PDOException $e) {
            die('Something went wrong!');
        }
    }
}