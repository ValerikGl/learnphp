<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function create()
    {
        view('users/create');
    }

    public function store()
    {
        $user = new User();

        $user->email = $_POST['email'];
        $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user->save();

        header('Location: /users');
    }

    public function view()
    {
        $user = User::find($_GET['id']);
        view('users/view', compact('user'));
    }

    public function edit()
    {
        $user = User::find($_GET['id']);
        view('users/edit', compact('user'));
    }

    public function update()
    {
        $user = User::find($_GET['id']);

        $user->email = $_POST['email'];

      
        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        }

        $user->save();

        header('Location: /users');
    }

    public function destroy()
    {
        $user = User::find($_GET['id']);
        $user->delete();

        header('Location: /users');
    }
}
