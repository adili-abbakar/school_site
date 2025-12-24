<?php
require_once __DIR__ . '/./Guard.php';
Guard::protect(__FILE__);

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    private $baseUrl;

    public function __construct()
    {
        // Detect base folder automatically (e.g. /school_site)
        $this->baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
    }

    // Register GET route
    public function get($path, $callback)
    {
        $this->routes['GET'][$path] = $callback;
    }

    // Register POST route
    public function post($path, $callback)
    {
        $this->routes['POST'][$path] = $callback;
    }

    // Resolve current request
    public function resolve()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Strip base folder automatically
        if ($this->baseUrl && $this->baseUrl !== '/') {
            if (strpos($path, $this->baseUrl) === 0) {
                $path = substr($path, strlen($this->baseUrl));
            }
        }

        // Normalize empty path to "/"
        if ($path === '' || $path === false) {
            $path = '/';
        }

        // Check if route exists
        $callback = $this->routes[$method][$path] ?? null;

        if ($callback) {
            if (is_callable($callback)) {
                return call_user_func($callback);
            } elseif (is_array($callback)) {
                [$controller, $method] = $callback;
                return call_user_func([new $controller, $method]);
            }
        }

        // If no route matched → custom 404
        http_response_code(404);
        require_once __DIR__ . '/../errors/404.php';
        exit;
    }

    //  Helper to generate URLs
    public function url($path)
    {
        return $this->baseUrl .'/'. $path;
    }
    
    public function asset($path)
    {
        return $this->baseUrl . '/public/' . ltrim($path, '/');
    }
}
