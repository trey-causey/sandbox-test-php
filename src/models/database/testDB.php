<?php namespace Causey\Database;

use PDO;
use Causey\Database\IDatabase;

class testDB {
    /**
     * @var IDatabase $db
     */
    protected $db;

    function testThisDB()
    {
        $param = [];
        $this->db = new DatabasePlain();
        $sql = "SELECT * FROM drivers";
        $q = $this->db->query($sql, $fetchStyle = PDO::FETCH_ASSOC, $param);
        var_dump($q);
    }
}
$test = new testDB();
$test->testThisDB();


