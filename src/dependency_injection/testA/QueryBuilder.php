<?php namespace Sandbox\DI;

class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

}