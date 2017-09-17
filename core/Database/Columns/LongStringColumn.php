<?php

namespace WebConstruct\Core\Database\Columns;

class LongStringColumn extends Column
{
    private $maxLength;

    public function getColumnType(): string
    {
        return "LONGTEXT";
    }

    public function getPhpType(): string
    {
        return "string";
    }

    public function getCreateTableSyntax(): string
    {
        return "`" . $this->columnName . "` LONGTEXT($this->maxLength) NOT NULL";
    }

    public function isPrimaryKey(): bool
    {
        return false;
    }

    public function __construct($columnName, $defaultValue, $maxLength = 2255)
    {
        parent::__construct($columnName, $defaultValue);
        $this->maxLength = $maxLength;
    }
}
