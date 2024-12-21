<?php

namespace App\Core;

use PDO;

abstract class Migration
{
  protected PDO $db;

  public function __construct()
  {
    $database = new Database();
    $this->db = $database->getConnection();
  }

  abstract public function up(): void;
  abstract public function down(): void;

  protected function execute(string $sql): bool
  {
    return $this->db->exec($sql) !== false;
  }
}
