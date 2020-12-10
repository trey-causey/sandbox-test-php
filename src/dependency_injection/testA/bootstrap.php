<?php

require __DIR__ . '/App.php';

App::bind('config', require 'config.php');

$config = App::get('config');