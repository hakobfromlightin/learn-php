<?php

$tasks = $app['database']->selectAll('tasks', 'Task');

require 'views/index.view.php';