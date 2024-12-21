<?php

namespace App\Core;

use PDO;

/**
 * Base Model class that all other models will inherit from
 */
class Model
{
    protected PDO $db;
    protected string $table;
    protected array $fillable = [];

    /**
     * Initialize database connection when model is created
     */
    public function __construct()
    {
        $this->db = (new Database())->getConnection();
    }

    /**
     * Get all records from the table
     */
    public static function all(): array
    {
        $model = new static();
        $stmt = $model->execute("SELECT * FROM {$model->table}");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Find a record by its ID
     */
    public static function find(int $id): ?object
    {
        $model = new static();
        $stmt = $model->db->prepare("SELECT * FROM {$model->table} WHERE id = ?");
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            foreach ($result as $key => $value) {
                $model->$key = $value;
            }
            return $model;
        }

        return null;
    }

    /**
     * Create a new record
     */
    public static function create(array $data): bool
    {
        $model = new static();
        $fields = array_intersect_key($data, array_flip($model->fillable));

        $columns = implode(', ', array_keys($fields));
        $values = implode(', ', array_fill(0, count($fields), '?'));

        $sql = "INSERT INTO {$model->table} ($columns) VALUES ($values)";
        return $model->execute($sql, array_values($fields))->rowCount() > 0;
    }

    /**
     * Execute a SQL query safely using prepared statements
     */
    protected function execute(string $sql, array $params = []): mixed
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /**
     * Update a record by its ID
     */
    public static function update(int $id, array $data): bool
    {
        $model = new static();
        $fields = array_intersect_key($data, array_flip($model->fillable));

        $updates = implode(', ', array_map(
            fn($field) => "$field = ?",
            array_keys($fields)
        ));

        $sql = "UPDATE {$model->table} SET $updates WHERE id = ?";
        $params = array_merge(array_values($fields), [$id]);

        return $model->execute($sql, $params)->rowCount() > 0;
    }

    /**
     * Delete a record by its ID
     */
    public static function delete($id): bool
    {
        $model = new static();
        $stmt = $model->db->prepare("DELETE FROM {$model->table} WHERE id = ?");
        return $stmt->execute([$id]);
    }

    /**
     * Find records by a specific field value
     */
    public static function where(string $field, mixed $value): array
    {
        $model = new static();
        $stmt = $model->execute(
            "SELECT * FROM {$model->table} WHERE $field = ?",
            [$value]
        );
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Find first record by a specific field value
     */
    public static function firstWhere(string $field, mixed $value): ?object
    {
        $model = new static();
        $stmt = $model->execute(
            "SELECT * FROM {$model->table} WHERE $field = ? LIMIT 1",
            [$value]
        );
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }
}
