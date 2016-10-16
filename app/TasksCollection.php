<?php

namespace App;
use Countable;

class TasksCollection implements Countable
{
    protected $collection;

    public function __construct($tasks = [])
    {
        $this->collection = $tasks;
    }

    public function add($task)
    {
        if (is_array($task)) {
            return array_map([$this, 'add'], $task);
        }

        return $this->collection[] = $task;
    }

    public function count()
    {
        return count($this->collection);
    }

    public function markAllAsCompleted()
    {
        foreach ($this->collection as $task) {
            $task->complete();
        }
    }
}
