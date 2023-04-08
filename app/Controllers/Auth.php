<?php

namespace App\Controllers;

use App\Services\Router;

class Auth
{
    public function logout()
    {
        unset($_SESSION['user']);
        Router::redirect('/login');

    }

    public function login($data)
    {
        $email = $data['email'];
        $pass = $data['pass'];

        $user = \R::findOne('users', 'email = ?', [$email]);

        if (!$user) {
            require_once("views/pages/home.php");
            die("<div class='text-center text-warning'>User not found</div>");
        }

        if (password_verify($pass, $user->pass)) {
            session_start();
            $_SESSION['user'] = [
                'id' => $user->id,
                'name' => $user->name,
                'avatar' => $user->avatar,
                'group' => $user->group,
                'email' => $user->email,
            ];
            Router::redirect('/profile');
        } else {
            die('Incorrect login or password ');
        }

    }

    public function register($data, $files)
    {
        $email = $data['email'];
        $name = $data['name'];
        $pass = $data['pass'];
        $confpass = $data['confpass'];

        if ($pass !== $confpass) {
            Router::error(500);
            die();
        }

        $avatar = $files['avatar'];

        $filename = time() . '_' . $avatar['name'];
        $path = "storage/avatar/" . $filename;

        if (move_uploaded_file($avatar['tmp_name'], $path)) {
            $user = \R::dispense('users');

            $user->email = $email;
            $user->name = $name;
            $user->avatar = '/' . $path;
            $user->pass = password_hash($pass, PASSWORD_DEFAULT);
            $user->group = 1;
            \R::store($user);
            Router::redirect('/login');
        } else {
            Router::error(500);
        }
    }

}