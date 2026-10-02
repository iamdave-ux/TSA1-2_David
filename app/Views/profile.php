<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
</head>
<body>
    <h1>Demo User Profile</h1>
    <nav>
        <a href="<?= base_url('/'); ?>">Today's Tasks</a> | 
        <a href="<?= base_url('/tasks'); ?>">All Tasks</a> | 
        <a href="<?= base_url('/profile'); ?>">Profile</a> | 
        <a href="<?= base_url('/about'); ?>">About</a>
    </nav>
    <hr>
    <?php if (!empty($user)): ?>
        <p><strong>Username:</strong> <?= esc($user['username']); ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']); ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']); ?></p>
        <p><strong>Member Since:</strong> <?= esc($user['created_at']); ?></p>
    <?php else: ?>
        <p>No user record found.</p>
    <?php endif; ?>
</body>
</html>