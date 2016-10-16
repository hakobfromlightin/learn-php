<?php

namespace App;

use InvalidArgumentException;

class Task
{
    protected $name;

    protected $priority;

    protected $status = false;

    protected $done_at;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function complete()
    {
        $this->status = true;
    }

    public function isCompleted()
    {
        return $this->status == true;
    }

    public function setPriority($priority)
    {
        $this->validatePriorityRange($priority);

        return $this->priority = $priority;
    }

    public function name()
    {
        return $this->name;
    }

    public function priority()
    {
        return $this->priority;
    }

    private function validatePriorityRange($priority)
    {
        if ($priority > 5) {
            throw new InvalidArgumentException;
        }
    }
}