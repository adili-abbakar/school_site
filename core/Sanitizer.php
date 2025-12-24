<?php
require_once __DIR__ . '/../core/Guard.php';
Guard::protect(__FILE__);

class Sanitizer
{

    public static function string($str)
    {
        return filter_var(trim($str), FILTER_SANITIZE_STRING);
    }

    public static function int($num)
    {
        return filter_var($num, FILTER_SANITIZE_NUMBER_INT);
    }

    public static function float($num)
    {
        return filter_var($num, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

    public static function email($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : false;
    }

    public static function url($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return filter_var($url, FILTER_VALIDATE_URL) ? $url : false;
    }

    public static function bool($bool)
    {
        return filter_var($bool, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    // Example: custom password validation (no sanitization, just rules)
    public static function password($password)
    {
        if (strlen($password) < 8) return false;
        if (!preg_match('/[A-Z]/', $password)) return false;
        if (!preg_match('/[a-z]/', $password)) return false;
        if (!preg_match('/[0-9]/', $password)) return false;
        return $password;
    }
}
