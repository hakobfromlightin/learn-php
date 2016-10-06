<?php

App::get('database')->insert('tasks', ['name' => $_POST['name'], 'status' => @$_POST['status'] ? 1 : 0]);

header('Location: /');