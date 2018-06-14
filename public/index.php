<?php
session_start();

<<<<<<< HEAD
define( 'ROOT', dirname(__DIR__) . '/' );
=======
// define('ROOT', str_replace('public/index.php', '', $_SERVER['SCRIPT_FILENAME']));

define('ROOT', dirname(__DIR__) . '/');
>>>>>>> feature/Loginandback

require_once ROOT . 'app/core/App.php';
require_once ROOT . 'app/core/Controller.php';
require_once ROOT . 'app/core/DB.php';

$app = new App;
