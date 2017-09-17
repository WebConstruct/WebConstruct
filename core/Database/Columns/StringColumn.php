<?php

namespace WebConstruct\Core\Database\Columns;

class StringColumn extends Column
{
    private $maxLength;

    public function getColumnType(): string
    {
        return "VARCHAR";
    }

    public function getPhpType(): string
    {
        return "string";
    }

    public function getCreateTableSyntax(): string
    {
        return "`" . $this->columnName . "` varchar($this->maxLength) NOT NULL";
    }

    public function isPrimaryKey(): bool
    {
        return false;
    }

    public function __construct($columnName, $defaultValue, $maxLength)
    {
        parent::__construct($columnName, $defaultValue);
        $this->maxLength = $maxLength;
    }
}
