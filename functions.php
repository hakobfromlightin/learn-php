<?php

function connectToPDO()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=learn_php', 'root', '');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from tasks');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}