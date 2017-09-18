<?php

namespace WebConstruct\Core\Database;

use WebConstruct\Core\Database\Columns\AutoIncrementColumn;
use WebConstruct\Core\Database\Columns\Column;

class TableSchema
{
    /**
     * @var $columns Column[]
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

    public function createTable()
    {
        $sql = "CREATE TABLE IF NOT EXISTS $this->tableName( ";
        $columns = [];

        foreach ($this->columns as $column) {
            $columns[] = $column->getCreateTableSyntax();
        }
        $sql .= implode(", ", $columns) . " ";

        if ($this->getPrimaryKey()) {
            $sql .= ", PRIMARY KEY(`" . $this->getPrimaryKey()->columnName . "` ) ";
        }
        return $sql . ")";
    }

    private function getPrimaryKey() {

      foreach($this->columns as $column) {
        if(is_a($column, AutoIncrementColumn::class) == true) {
          return $column;
        }
      }
      return false;
    }
}
