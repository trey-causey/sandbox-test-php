<?php namespace Causey\Models\Roster;

use Causey\Database\IDatabase;
use Causey\Models\Drivers\IDriver;
use Causey\Roster\IRoster;

abstract class Roster implements IRoster
{
    protected $db;
    protected $id;

    public function __construct(IDatabase $db, IDriver $id)
    {
        $this->db = $db;
        $this->id = $id;
    }

    public static function create()
    {

    }

}