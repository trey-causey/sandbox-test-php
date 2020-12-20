<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use Sandbox\DI\App;
use Sandbox\DI\QueryBuilder;
use Sandbox\DI\Connection;

App::bind('config', require __DIR__ . '/../../../common/setup/config.php');

//die(var_dump(App::get('config')));

try {
    App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
    ));
} catch (Exception $e) {
}

$config = App::get('config');
var_dump($config);