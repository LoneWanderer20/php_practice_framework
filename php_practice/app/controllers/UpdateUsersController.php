<?php

namespace App\Controllers;

use App\Core\App;

class UpdateUsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('update', compact('users'));
    }

    public function update()
    {
        App::get('database')->update('users', [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'id' => $_POST['id']
        ]);

        header('Location: /update');
    }
}
