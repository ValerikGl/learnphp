<?php

namespace App\Controllers;

class AuthController
{

    public function registerForm() {
        // setcookie('mycookie', 'tasty', time() + 60 * 60 * 24 * 30);
        // dump($_COOKIE);
        session_start();
        // $_SESSION['secret'] = 'shh!';
        dump($_SESSION);
    }

    public function register()
    {
        
    }

    public function loginForm()
    {
       
    }

    public function login()
    {
        
    }

    public function logout()
    {
        
    }
}
