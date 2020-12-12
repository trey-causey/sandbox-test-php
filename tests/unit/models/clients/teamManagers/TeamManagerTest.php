<?php

require_once __DIR__ . '/../../../TestHelper.php';

use Causey\Clients\TeamManager;
use PHPUnit\Framework\TestCase;

class TeamManagerTest extends TestCase
{
    /** @test  */
    public function test__construct()
    {
        $this->assertInstanceOf(TeamManager::class, new TeamManager(1, new DatabasePlain()));
    }

}
