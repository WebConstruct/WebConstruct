<?php

namespace WebConstruct\Core\Database;

abstract class Schema
{
  private $tables;
  public function addTables(Table ...$table) {
    foreach ($tables as $table) {
        $this->tables[] = $table;
    }
  }

  public function connectDB() {
    try{
        $pdo = new PDO ("mysql:host=".$DatabaseSettings::$host.";
                          dbname=".$DatabaseSettings::$database.\"",
                          $DatabaseSettings::$username,
                          $DatabaseSettings::$password);
    }
    catch(PDOException $e){
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
