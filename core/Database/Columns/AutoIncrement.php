<?php

namespace WebConstruct\Core\Database\Columns;

class AutoIncrement extends IntegerColumn
{
    /**
     * @return bool if this is for use as a primary key
     */
    public function isPrimaryKey(): bool
    {
        return true;
    }
}
