<?php

namespace WebConstruct\Core\Database\Columns;

abstract class Column
{
    public $columnName;
    protected $defaultValue;

    public function __construct($columnName, $defaultValue = null)
    {
        $this->columnName = $columnName;
        $this->defaultValue = $defaultValue;
    }

    /**
     * @return string this is the data type from MySql
     */
    abstract public function getColumnType(): string;

    /**
     * @return string this is the data type that we will use for the column in php
     */
    abstract public function getPhpType(): string;

    /**
     * @return string for creating the column in mysql
     */
    abstract public function getCreateTableSyntax(): string;

    /**
     * @return bool if this is for use as a primary key
     */
    abstract public function isPrimaryKey(): bool;
}
