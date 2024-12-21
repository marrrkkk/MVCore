<?php

namespace App\Core;

use PDO;
use PDOException;
use Dotenv\Dotenv;
use Exception;

class Database
{
    private ?PDO $db = null;

    public function __construct()
    {
        // Load environment variables from .env file
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
        $dotenv->load();

        // Get the database configuration from environment variables
        $host = $_ENV['DB_HOST'] ?? 'localhost';
        $port = $_ENV['DB_PORT'] ?? '3306';
        $dbname = $_ENV['DB_NAME'] ?? 'your_database';
        $user = $_ENV['DB_USER'] ?? 'root';
        $password = $_ENV['DB_PASSWORD'] ?? '';
        $charset = $_ENV['DB_CHARSET'] ?? 'utf8mb4';

        try {
            // Create a PDO instance for the database connection
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
            $this->db = new PDO($dsn, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Set error mode to exception
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Method to return the PDO connection instance
    public function getConnection(): PDO
    {
        return $this->db;
    }

    /**
     * Run database migrations in the specified direction
     * Loads all migration files from the given path and executes them in sequence.
     * Each migration must extend the base Migration class and implement up/down methods.
     */
    public function runMigrations(string $migrationPath, string $direction = 'up', ?string $tableName = null): void
    {
        // Get all PHP files in the migrations directory
        $migrations = glob($migrationPath . '/*.php');

        foreach ($migrations as $migrationFile) {
            // Skip if specific table is requested and doesn't match
            if ($tableName !== null && !str_contains(strtolower($migrationFile), strtolower($tableName))) {
                continue;
            }

            // Load the migration file into memory
            require_once $migrationFile;

            // Extract the filename without extension and get the class name part after underscore
            $baseName = pathinfo($migrationFile, PATHINFO_FILENAME);
            $parts = explode('_', $baseName);
            $className = 'Database\\Migrations\\' . $parts[1];

            // Verify the migration class exists
            if (!class_exists($className)) {
                throw new Exception("Migration class $className not found.");
            }

            // Create an instance of the migration class
            $migration = new $className();

            // Ensure migration class extends the base Migration class
            if (!($migration instanceof Migration)) {
                throw new Exception("$className must extend App\Core\Migration.");
            }

            // Execute the migration in the specified direction (up/down)
            echo "Running $className $direction...\n";
            $migration->{$direction}();
            echo "$className $direction complete.\n";
        }
    }
}
