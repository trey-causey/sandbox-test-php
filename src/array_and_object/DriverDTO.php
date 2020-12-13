<?php namespace Causey\ArrayAndObject;

use Causey\Database\DatabasePlain;
use Causey\Database\IDatabase;

class DriverDTO
{
        protected $id;
        protected IDatabase $db;

    /**
     * DriverDTO constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $param = [$id];
        $sql = 'SELECT * from drivers where driverId = ?, $id';
        $ans = $this->db->fetchAll($sql, $param);

    }

}