<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="/about">About Page</a></li>
        <li><a href="/about/culture">About Culture</a></li>
        <li><a href="/contact">Contact Page</a></li>
    </ul>
</nav>
<header>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
            <?php if ($task->status == 1): ?>
                <span style="text-decoration: line-through;"><?= $task->name;  ?></span>
            <?php else: ?>
                <span><?= $task->name; ?></span>
            <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</header>
</body>
</html>