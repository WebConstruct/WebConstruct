<?php

namespace WebConstruct\Core\Database;

abstract class Table
{
    abstract public function getSchema() : TableSchema;
}