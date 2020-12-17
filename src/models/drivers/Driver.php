<?php namespace Causey\Models\Drivers;

class Driver implements IDriver {
    protected $id;
    protected $db;
    protected $details;

    public function __construct($id, $db)
    {
        $this->id = $id;
        $this->db = $db;
        $this->details = $this->getData();
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

