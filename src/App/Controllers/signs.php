<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use App\App;
use App\Models\User;
use App\Models\SignUp;
use App\Models\Login;
use PDO;

class signs
{
    public function signupView(): View
    {
        if (isset($_SESSION['user_id'])) {
            header('Location: /');
            exit;
        }
        return View::make('signs/signup');
    }
    public function signup(): void
    {
        if (isset($_SESSION['user_id'])) {
            header('Location: /');
            exit;
        }
        try {
            $email = $_POST['email'] ?? null;
            $name = $_POST['name'] ?? null;
            $pass = $_POST['pass'] ?? null;
            $cpass = $_POST['cpass'] ?? null;
            if (
                !$name ||
                !$email ||
                !$pass ||
                !$cpass ||
                strlen($pass) < 8 ||
                $pass !== $cpass ||
                !filter_var($email, FILTER_VALIDATE_EMAIL)
            ) {
                $_SESSION['signup_error'] = 'Please fill all fields correctly. Password must be at least 8 characters and match the confirmation.';
                header('Location: /signup');
                exit;
            }

            $userModel = new User();

            $userId = (new SignUp($userModel))->register([
                'email' => $email,
                'name' => $name,
                'pass' => $pass
            ]);
            $_SESSION['user_id'] = $userId;
            header('Location: /');
            exit;
        } catch (\PDOException) {
            $_SESSION['signup_error'] = 'Email already exists.';
            header('Location: /signup');
            exit;
        }
    }
    public function loginView(): View
    {
        return View::make('signs/login');
    }
    public function login(): void
    {
        $email = $_POST['email'] ?? null;
        $pass = $_POST['password'] ?? null;

        $loginModel = new Login();
        $user = $loginModel->authenticate($email, $pass);
        if ($user) {
            header('Location: /');
            exit;
        } else {
            $_SESSION['login_error'] = 'Invalid email or password.';
            header('Location: /login');
            exit;
        }
    }
}
