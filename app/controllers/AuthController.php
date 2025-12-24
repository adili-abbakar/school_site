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
            $_SESSION['error'] = "Invalid credentials";
            header("Location: /login");
            exit;
        }
    }

    public function register()
    {
        global $router;
        $userModel = new User();

        $data = [
            'full_name'        => $_POST['full_name'] ?? '',
            'email'            => $_POST['email'] ?? '',
            'phone'            => $_POST['phone'] ?? '',
            'date_of_birth'    => $_POST['date_of_birth'] ?? '',
            'gender'           => $_POST['gender'] ?? '',
            'nationality'      => $_POST['nationality'] ?? '',
            'state'            => $_POST['state'] ?? '',
            'tribe'            => $_POST['tribe'] ?? '',
            'local_government' => $_POST['local_government'] ?? '',
            'home_address'     => $_POST['home_address'] ?? '',
            'password'         => $_POST['password'] ?? '',
            'role'             => $_POST['role'] ?? 'STUDENT'
        ];

        if ($userModel->emailExists($data['email'])) {
            $_SESSION['error'] = "Email already registered.";
            header("Location: /register");
            exit;
        }

        $userModel->create($data);

        $_SESSION['message'] = "Registration successful. Please login.";
        header("Location: /login");
        exit;
    }

    public function logout()
    {
        global $router;
        session_destroy();
        header("Location: " . $router->url('/login'));
        exit;
    }

    //  Forgot Password
    public function showForgotPassword()
    {
        global $router;
        include __DIR__ . '/../views/auth/forgot_password.php';
    }

    public function sendResetLink()
    {
        $userModel = new User();
        $email = $_POST['email'] ?? '';
        $user = $userModel->findByEmail($email);

        if ($user) {
            $token = bin2hex(random_bytes(32));
            $userModel->storeResetToken($user['id'], $token);

            // Example: send email (replace with real mailer)
            $resetUrl = "/reset-password?token=$token";
            // mail($user['email'], "Password Reset", "Click here: $resetUrl");

            $_SESSION['message'] = "If that email exists, a reset link was sent.";
        } else {
            $_SESSION['message'] = "If that email exists, a reset link was sent.";
        }

        header("Location: /forgot-password");
        exit;
    }

    //  Reset Password
    public function showResetPassword()
    {
        global $router;
        $token = $_GET['token'] ?? '';
        include __DIR__ . '/../views/auth/reset_password.php';
    }

    public function resetPassword()
    {
        $userModel = new User();
        $token = $_POST['token'] ?? '';
        $newPassword = $_POST['password'] ?? '';

        $user = $userModel->findByResetToken($token);

        if ($user) {
            $hashed = password_hash($newPassword, PASSWORD_BCRYPT);
            $userModel->updatePassword($user['id'], $hashed);
            $userModel->clearResetToken($user['id']);

            $_SESSION['message'] = "Password reset successful. Please login.";
            header("Location: /login");
            exit;
        } else {
            $_SESSION['error'] = "Invalid or expired token.";
            header("Location: /reset-password?token=" . $token);
            exit;
        }
    }
}
