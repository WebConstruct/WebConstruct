<?php

namespace WebConstruct\Core\Database;

use PDO;
use PDOException;

abstract class Schema
{
    /**
     * @var $tables Table[]
     */
  private $tables;

  public function addTables(Table ...$tables) {
    foreach ($tables as $table) {
        $this->tables[] = $table;
    }
  }

    public function connectDB()
    {
        $pdo = null;
        try {
            // TODO: Use singleton pattern
            // $databaseSettings = DatabaseSettings::singleton();
            $pdo = new PDO ("mysql:host=localhost;dbname=testing",
                "root",
                ""
            );
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $pdo;
    }

  public function updateSchemas() {
    $pdo = $this->connectDB();
    foreach($this->tables as $table) {
      $sth = $pdo->prepare($table->getSchema()->createTable());

      $sth->execute();
    }
  }
}
