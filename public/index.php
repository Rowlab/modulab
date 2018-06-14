<?php

session_start();

error_reporting(-1);

// define('ROOT', str_replace('public/index.php', '', $_SERVER['SCRIPT_FILENAME']));

define('ROOT', dirname(__DIR__) . '/');


require_once ROOT . 'app/core/App.php';
require_once ROOT . 'app/core/Controller.php';
require_once ROOT . 'app/core/DB.php';

$app = new App;
