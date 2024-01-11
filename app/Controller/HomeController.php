<?php

namespace Tamhar\BelajarPhpLogger\Controller;

use Tamhar\BelajarPhpLogger\App\View;

class HomeController
{
    public function index(): void
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Programmer Zaman Now"
        ];

        View::render('Home/index', $model);
    }

    public function hello(): void
    {
        echo "HomeController.hello()";
    }

    public function world(): void
    {
        echo "HomeController.world()";
    }

    public function about(): void
    {
        echo "Author : Rahmat";
    }

    public function login(): void
    {
        // data from client to server
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [];

        // data return from server to clieanr
        $response = [
            "message" => "Login Sukses"
        ];
    }
}
