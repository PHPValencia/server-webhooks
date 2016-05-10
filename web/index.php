<?php
define('BASEPATH', realpath(__DIR__.'/..'));
require_once BASEPATH.'/vendor/autoload.php'; 

date_default_timezone_set('Europe/Madrid');

( new \PHPValencia\ServerAPI() )
	->run();