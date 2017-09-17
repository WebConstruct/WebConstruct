<?php

namespace WebConstruct\Core\Database;

use WebConstruct\Core\Database\Columns\Column;

class TableSchema
{
    private $isNewRecord = true;

    final public function __construct($rowId = 0)
    {
        if ($rowId > 0) {
            $this->populateRecordData();
            $this->isNewRecord = false;
        }
    }

    public function isNewRecord()
    {
        return $this->isNewRecord;
    }

    /**
     * @var $columns array
     */
    protected $columns;
    /**
     * @var $modelData array
     */
    protected $data;

    final public function addColumns(Column ...$columns)
    {
        foreach ($columns as $column) {
            $this->columns[] = $column;
        }
    }

    public function populateRecordData()
    {
        foreach ($this->columns as $column) {
            // TODO: load each row into the record data
        }
    }

    public function save()
    {
        foreach ($this->columns as $column) {

        }
        // TODO: Insert or Update
    }

    public function delete()
    {
        foreach ($this->columns as $column) {
            // TODO: Delete
        }
    }

}