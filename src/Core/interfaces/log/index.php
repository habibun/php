<?php
require_once './FileLogger.php';
require_once './DatabaseLogger.php';

$fileLogger = new FileLogger('./log.txt','w');
$fileLogger->log('start using file logger');


$databaseLogger = new DatabaseLogger();
$databaseLogger->log('start using database logger');


