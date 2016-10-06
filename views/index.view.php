<?php require('views/partials/head.view.php'); ?>
<h1>New Task</h1>
<form action="/task" method="POST">
    <label>Name:
        <input type="text" name="name">
    </label>
    <br>
    <label>Status:
        <input type="checkbox" name="status">
    </label>
    <br>
    <button type="submit">Save</button>
</form>
<hr>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php if ($task->status == 1): ?>
                <span style="text-decoration: line-through;"><?= $task->name; ?></span>
            <?php else: ?>
                <span><?= $task->name; ?></span>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php require('views/partials/footer.view.php'); ?>
