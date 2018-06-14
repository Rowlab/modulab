<?php
session_start();

define( 'ROOT', dirname(__DIR__) . '/' );

require_once ROOT . 'app/core/App.php';
require_once ROOT . 'app/core/Controller.php';
require_once ROOT . 'app/core/DB.php';

$app = new App;

