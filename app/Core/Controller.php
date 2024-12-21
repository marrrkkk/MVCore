<?php

namespace App\Core;

// Base Controller class that all other controllers will inherit from
class Controller
{
  // Renders a view file and passes data to it
  public function view(string $view, array $data = []): void
  {
    extract($data);  // Convert array keys into variables for the view
    require "../app/Views/$view.php";  // Load and display the view file
  }

  /**
   * Redirect to a given URL
   *
   * @param string $url The URL to redirect to
   * @param int $statusCode HTTP status code (default: 302)
   * @return void
   */
  protected function redirect(string $url, int $statusCode = 302): void
  {
    header('Location: ' . $url, true, $statusCode);
    exit;
  }
}
