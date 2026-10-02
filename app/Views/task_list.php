<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks List</title>
</head>
<body>
    <h1>All Tasks</h1>
    <nav>
        <a href="<?= base_url('/'); ?>">Today's Tasks</a> | 
        <a href="<?= base_url('/tasks'); ?>">All Tasks</a> | 
        <a href="<?= base_url('/profile'); ?>">Profile</a> | 
        <a href="<?= base_url('/about'); ?>">About</a>
    </nav>
    <hr>
    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($tasks)): ?>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= esc($task['id']); ?></td>
                        <td><?= esc($task['title']); ?></td>
                        <td><?= esc($task['status']); ?></td>
                        <td><?= esc($task['task_date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">No tasks found in the database.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>