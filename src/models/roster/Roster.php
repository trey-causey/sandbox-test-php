<?php namespace Causey\Models\Roster;

use Causey\Database\DatabasePlain;
use Causey\Database\IDatabase;
use Causey\Models\Drivers\IDriver;
use Causey\Roster\IRoster;

class Roster implements IRoster
{
    protected $db;
    protected $id;

    /**
     * @var IDriver $driver_array
     */
    protected $driver_array = [];

    public function __construct()
    {
    }

    public static function create()
    {
        return new Roster();
    }

    public function addDriver(IDriver $driver)
    {
        array_push($this->driver_array, $driver);
    }


    /**
     * @param array $data
     * @return mixed
     */
    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @return array
     */
    public function delete(): array
    {
        // TODO: Implement delete() method.
    }
}
