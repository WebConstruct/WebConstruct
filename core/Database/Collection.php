<?php

namespace WebConstruct\Core\Database;

class Collection
{
    /**
     * @var $entities Entity[]
     */
    private $entities;

    public function addEntity(Entity $entity)
    {
        $this->entities[] = $entity;
    }

    public function all()
    {
        return $this->entities;
    }
}