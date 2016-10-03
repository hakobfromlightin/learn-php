<?php

require 'functions.php';
require 'Task.php';

$tasks = fetchAllTasks(connectToPDO());

require 'index.view.php';