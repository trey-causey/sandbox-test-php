<?php namespace unit\data_structures;
require_once __DIR__ . '/../../../src/data_structures/hashTableIndex.php';

use HashTable;
use PHPUnit\Framework\TestCase;

class HashTableTest extends TestCase
{
    public function testObject() {
        $obj = new HashTable();
        $this->assertIsObject(HashTable::class);
        $this->assertIsObject($obj);
    }
}
