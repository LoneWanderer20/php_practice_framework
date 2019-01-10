<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <?php require('partials/nav.php'); ?>

    <h1>Users</h1>

    <table>
        <thead>
            <tr><th>Users Table</th></tr>
        </thead>
        <tbody>

            <form method="POST" action="users">
                name: <input name="name" required />
                age: <input name="age" required />
                <button type="submit">Submit</button>
            </form>


            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->name ?></td>
                    <td><?= $user->age ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>
