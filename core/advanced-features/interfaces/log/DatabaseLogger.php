<?php

require_once './LoggerInterface.php';

class DatabaseLogger implements LoggerInterface
{
    public function log($message){
        echo sprintf("Log %s to the database\n",$message);
    }
}