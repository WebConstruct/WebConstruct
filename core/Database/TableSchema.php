<?php

namespace WebConstruct\Core\Database;

use WebConstruct\Core\Database\Columns\Column;

class TableSchema
{
    /**
     * @var $columns array
     */
    protected $columns;
    protected $tableName;
    public function __construct($tableName) {
      $this->tableName = $tableName;
    }

    final public function addColumns(Column ...$columns)
    {
        foreach ($columns as $column) {
            $this->columns[] = $column;
        }
    }

    public function createTable() {
      $sql = "CREATE TABLE IF NOT EXISTS $this->tableName( ";
      foreach($this->columns as $column) {
        $sql.= " ".$column->getCreateTableSyntax()." ";
      }

      $sql.=" ) ";
      if($this->getPrimaryKey()) {
        $sql.="PRIMARY KEY(".$this->getPrimaryKey()->columnName." ) ";
      }
      return $sql;
    }

    private function getPrimaryKey() {

      foreach($this->columns as $column) {
        if($column->isPrimaryKey() == true) {
          return $column;
        }
      }
      return false;
    }
}
