<?php

namespace App\Controllers;

use App\Core\App;

class DeleteUsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('delete', compact('users'));
    }

    public function delete()
    {
        App::get('database')->delete('users', [
            'id' => $_POST['id']
        ]);

        header('Location: /delete');
    }
}
