<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    public function showLogin()
    {
        global $router;
        include __DIR__ . '/../views/auth/login_form.php';
    }

    public function showRegister()
    {
        global $router;
        include __DIR__ . '/../views/auth/register_form.php';
    }

    public function login()
    {
        global $router;
        $userModel = new User();
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $userModel->authenticate($email, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: /dashboard");
            exit;
        } else {
            echo "Invalid credentials";
        }
    }

    public function register()
    {
        global $router;
        $userModel = new User();

        // Collect form data
        $data = [
            'full_name' => $_POST['full_name'] ?? '',
            'email' => $_POST['email'] ?? '',
            'phone' => $_POST['phone'] ?? '',
            'date_of_birth' => $_POST['date_of_birth'] ?? '',
            'gender' => $_POST['gender'] ?? '',
            'nationality' => $_POST['nationality'] ?? '',
            'state' => $_POST['state'] ?? '',
            'tribe' => $_POST['tribe'] ?? '',
            'local_government' => $_POST['local_government'] ?? '',
            'home_address' => $_POST['home_address'] ?? '',
            'password' => $_POST['password'] ?? '',
            'role' => $_POST['role'] ?? 'STUDENT'
        ];

        // Check if email already exists
        if ($userModel->emailExists($data['email'])) {
            echo "Email already registered.";
            return;
        }

        // Create user
        $userModel->create($data);

        // Redirect to login
        header("Location: /login");
        exit;
    }

    public function logout()
    {
        global $router;
        session_destroy();
        header("Location: " . $router->url('login'));
        exit;
    }
}
