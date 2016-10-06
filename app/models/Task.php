<?php

namespace App\Models;

class Task
{
    public $name;

    public $status = false;

    public $done_at;

    public function complete()
    {
        $this->status = true;
    }

    public function isComplete()
    {
        return $this->status;
    }
}