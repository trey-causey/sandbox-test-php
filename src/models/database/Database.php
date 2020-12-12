<?php namespace Causey\Database;

abstract class Database implements IDatabase
{
    /**
     * @inheritDoc
     */
    public function query($sql, $params = array())
    {
        // TODO: Implement query() method.
    }

    public function fetchAll($sql, $params = array())
    {
        // TODO: Implement fetchAll() method.
    }
}