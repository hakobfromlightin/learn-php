<?php require('views/partials/head.view.php'); ?>
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
