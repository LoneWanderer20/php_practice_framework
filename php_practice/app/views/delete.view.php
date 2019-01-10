<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Delete Users</title>
    <link rel="stylesheet" type="text/css" href="public/css/users.css" />
</head>

<body>
    <?php require('partials/nav.php'); ?>

    <h1>Delete Users</h1>

    <p>You can now delete users!</p>

    <table>
        <thead>
            <tr><th>Users Table</th></tr>
        </thead>
        <tbody>

            <form name="deleteForm" method="POST" action="/delete">

            <?php foreach ($users as $user): ?>
                <tr id="test">
                    <td><?= $user->name ?></td>
                    <td><?= $user->age ?></td>
                    <td class="hidden-id"><?= $user->id ?></td>
                    <td><button type="button" class="delete-button">Delete</button></td>
                </tr>
            <?php endforeach; ?>

                <input id="id" type="hidden" name="id" />
            </form>

        </tbody>
    </table>

    <script>
        window.onload = addClickEventToButtonsOnLoad = function() {
            let buttons = document.getElementsByClassName("delete-button");
            let buttonsLength = buttons.length;

            for (let i = 0; i < buttonsLength; i++) {
                buttons[i].onclick = submitForm;
            }

        };

        let getUserId = function(e) {
            let deleteButton = e.target;
            return deleteButton.parentNode.previousSibling.previousSibling.innerHTML;
        };

        let submitForm = function(e) {
            document.getElementById("id").value = getUserId(e);

            document.deleteForm.submit();
        };

    </script>

</body>

</html>
