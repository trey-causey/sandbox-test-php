<?php namespace Causey\Clients;

class TeamManager {

    protected $id;

    /**
     * TeamManager constructor.
     * @param $id
     * @param $db
     */
    public function __construct($id, $db)
    {
        $this->id = $id;
        $this->db = $db;
    }

    function getData()
    {
        $driverSQL = "SELECT * from teamowners where driverId = ?";
        $ans = $this->db->fetchAll($driverSQL, array($this->id));
        return $ans[0];
    }

}
