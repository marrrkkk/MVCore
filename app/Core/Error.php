<?php

namespace App\Core;

use Throwable;

// Custom error handler class to manage application-wide errors and exceptions
class Error
{
    // Handles all uncaught exceptions in the application
    // Displays a 500 error page with exception details
    public static function handleException(Throwable $exception): void
    {
        http_response_code(500);  // Set HTTP response code to 500 (Internal Server Error)

        // Extract useful information from the exception
        $exception_type = get_class($exception);
        $message = $exception->getMessage();
        $stack_trace = $exception->getTraceAsString();
        $file_info = "Thrown in '" . $exception->getFile() . "' on line " . $exception->getLine();

        // Display the error page with the extracted information
        require dirname(__DIR__) . '/Views/error/500.php';
    }

    // Converts PHP errors into exceptions for consistent error handling
    // This allows all errors to be handled by the exception handler above
    public static function handleError(int $errno, string $errstr, string $errfile, int $errline): void
    {
        // Convert errors to exceptions
        throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
    }
}
