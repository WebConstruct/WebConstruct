<?php

namespace WebConstruct\Core\Database\Columns;

class AutoIncrementColumn extends IntegerColumn
{
    /**
     * @return bool if this is for use as a primary key
     */
    public function isPrimaryKey(): bool
    {
        return true;
    }

    /**
     * @return string for creating the column in mysql
     */
    public function getCreateTableSyntax(): string
    {
        return "`" . $this->columnName . "` int unsigned NOT NULL AUTO_INCREMENT";
    }
}
