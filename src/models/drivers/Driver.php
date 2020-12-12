<?php namespace Causey\Models\Drivers;

class Driver {
    protected $id;
    protected $db;

    public function __construct($id, $db)
    {
        $this->id = $id;
        $this->db = $db;
    }

    public function makeDriverObject() {
        $this->getData();
    }

    public function getData()
    {
        $driverSQL = "SELECT * from drivers where driverId = ?";
        $ans = $this->db->fetchAll($driverSQL, array($this->id));
        return $ans[0];
    }
}
