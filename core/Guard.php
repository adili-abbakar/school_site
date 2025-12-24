<?php
class Guard
{
    public static function protect($file = __FILE__)
    {
        if (basename($file) === basename($_SERVER['SCRIPT_FILENAME'])) {
            http_response_code(403);
            // Redirect to custom 403 page
            require_once __DIR__ . '/../errors/403.php';
            exit;
        }
    }
}
