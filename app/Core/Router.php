<?php

namespace App\Core;

// Router class handles URL routing and maps URLs to controller actions
class Router
{
  // Stores all registered routes as [HTTP_METHOD => [path => handler]]
  protected array $routes = [];

  // Registers a new GET route with its handler
  public function get(string $path, array $handler): void
  {
    $this->routes['GET'][$path] = $handler;
  }

  // Registers a new POST route with its handler
  public function post(string $path, array $handler): void
  {
    $this->routes['POST'][$path] = $handler;
  }

  // Registers a new PUT route with its handler
  public function put(string $path, array $handler): void
  {
    $this->routes['PUT'][$path] = $handler;
  }

  // Registers a new DELETE route with its handler
  public function delete(string $path, array $handler): void
  {
    $this->routes['DELETE'][$path] = $handler;
  }

  protected function matchRoute(string $route, string $url): ?array
  {
    // Remove query string from URL for matching
    $url = parse_url($url, PHP_URL_PATH);

    // Convert route parameters to regex pattern
    $pattern = preg_replace('/\{([^}]+)\}/', '([^/]+)', $route);
    $pattern = "#^{$pattern}$#";

    if (preg_match($pattern, $url, $matches)) {
      array_shift($matches); // Remove the full match
      return $matches; // Return captured parameters
    }

    return null;
  }

  // Matches the current URL against registered routes and executes the corresponding handler
  public function dispatch(string $url): void
  {
    // Get the current HTTP request method (GET, POST, etc.)
    $method = $_SERVER['REQUEST_METHOD'];

    // Check for method override in POST requests
    if ($method === 'POST' && isset($_POST['_method'])) {
      $method = strtoupper($_POST['_method']);
    }

    // If no routes exist for this HTTP method, return 404
    if (!isset($this->routes[$method])) {
      http_response_code(404);
      require dirname(__DIR__) . '/Views/error/404.php';
      return;
    }

    // Loop through all registered routes for this HTTP method
    foreach ($this->routes[$method] as $route => $handler) {
      $params = $this->matchRoute($route, $url);

      if ($params !== null) {
        // Execute the handler (controller method)
        if (is_array($handler)) {
          [$controller, $method] = $handler;
          (new $controller)->$method(...$params);
        }
        return;
      }
    }

    // If no matching route found, return 404
    http_response_code(404);
    require dirname(__DIR__) . '/Views/error/404.php';
  }
}
