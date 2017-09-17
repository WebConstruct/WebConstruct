<?php

namespace WebConstruct\Core\Database\Columns;

class IntegerColumn extends Column
{
    /**
     * @return string this is the data type from MySql
     */
    public function getColumnType(): string
    {
        return "int";
    }

    /**
     * @return string this is the data type that we will use for the column in php
     */
    public function getPhpType(): string
    {
        return "int";
    }

    /**
     * @return string for creating the column in mysql
     */
    public function getCreateTableSyntax(): string
    {
        return "`".$this->columnName."` int unsigned NOT NULL";
    }

    /**
     * @return bool if this is for use as a primary key
     */
    public function isPrimaryKey(): bool
    {
        return false;
    }
}