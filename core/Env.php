<?php
require_once __DIR__ . '/../core/Guard.php';
Guard::protect(__FILE__);

class Env
{
    /**
     * Load environment variables from a .env file
     */
    public static function load(string $path): void
    {
        if (!file_exists($path)) {
            throw new Exception("Env file not found at: $path");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            $line = trim($line);

            // Skip comments
            if (strpos($line, '#') === 0) {
                continue;
            }

            // Split into name and value
            list($name, $value) = explode('=', $line, 2);

            $name  = trim($name);
            $value = trim($value);

            // Remove surrounding quotes if present
            $value = trim($value, "\"'");

            // Save into environment
            $_ENV[$name]    = $value;
            $_SERVER[$name] = $value;
            putenv("$name=$value");
        }
    }

    /**
     * Get an environment variable with optional default
     */
    public static function get(string $key, $default = null)
    {
        if (isset($_ENV[$key])) {
            return $_ENV[$key];
        }
        if (getenv($key) !== false) {
            return getenv($key);
        }
        return $default;
    }
}
