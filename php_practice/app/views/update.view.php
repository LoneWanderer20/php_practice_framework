<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Update Users</title>
    <link rel="stylesheet" type="text/css" href="public/css/users.css" />
</head>

<body>
    <?php require('partials/nav.php'); ?>

    <h1>Update Users</h1>

    <p>You can now update users!</p>

    <table>
        <thead>
            <tr><th>Users Table</th></tr>
        </thead>
        <tbody>

            <form name="updateForm" method="POST" action="/update">

            <?php foreach ($users as $user): ?>
                <tr id="test">
                    <td><input name="name" value=<?= $user->name ?> /></td>
                    <td><input name="age" value=<?= $user->age ?> /></td>
                    <td><button type="button" class="update-button">Update</button></td>
                    <td class="hidden-id"><input type="hidden" value=<?= $user->id ?> /></td>
                </tr>
            <?php endforeach; ?>
                <input id="name" type="hidden" name="name" />
                <input id="age" type="hidden" name="age" />
                <input id="id" type="hidden" name="id" />
            </form>

        </tbody>
    </table>

    <script>
        window.onload = addClickEventToButtonsOnLoad = function() {
            let buttons = document.getElementsByClassName("update-button");
            let buttonsLength = buttons.length;

            for (let i = 0; i < buttonsLength; i++) {
                buttons[i].onclick = submitForm;
            }

        };

        let getUserName = function(e) {
            let updateButton = e.target;
            return updateButton.parentNode.parentNode.firstElementChild.firstElementChild.value;
        };

        let getUserAge = function(e) {
            let updateButton = e.target;
            return updateButton.parentNode.previousElementSibling.firstElementChild.value;
        };

        let getUserId = function(e) {
            let updateButton = e.target;
            return updateButton.parentNode.nextElementSibling.firstElementChild.value;
        };

        let submitForm = function(e) {
            document.getElementById("name").value = getUserName(e);
            document.getElementById("age").value = getUserAge(e);
            document.getElementById("id").value = getUserId(e);

            document.updateForm.submit();
        };

    </script>

</body>

</html>
