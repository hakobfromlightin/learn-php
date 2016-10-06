<?php

namespace App\Controllers;

use App\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('tasks', 'App\Models\Task');

        return view('index', compact('tasks'));
    }

    public function store()
    {
        App::get('database')->insert('tasks', [
            'name' => $_POST['name'],
            'status' => @$_POST['status'] ? 1 : 0
        ]);

        redirect('tasks');
    }

}