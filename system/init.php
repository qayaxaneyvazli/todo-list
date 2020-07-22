<?php
ob_start();

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Asia/Baku');


define('BASE_URL', 'http://localhost/todo-list/');


require __DIR__ . '/config.php';

require 'helpers.php';
