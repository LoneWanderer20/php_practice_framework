<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>
    <?php require('partials/nav.php'); ?>

    <h1>Submit Your Name and Age</h1>

    <form method="POST" action="users">
        name: <input name="name" required />
        <button type="submit">Submit</button>
    </form>

</body>

</html>
