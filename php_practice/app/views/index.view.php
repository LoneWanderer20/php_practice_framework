<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <?php require('partials/nav.php'); ?>

    <h1>Home</h1>

    <p>This application has the following users</p>

    <ul>
    <?php foreach ($users as $user): ?>
        <li><?= $user->name ?></li>
    <?php endforeach; ?>
    </ul>

</body>

</html>
