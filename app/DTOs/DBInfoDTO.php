<?php
namespace App\DTOs;

class DBInfoDTO
{
    public $dbConnection;
    public $dbHost;

    public function __construct($dbConnection, $dbHost)
    {
        $this->dbConnection = $dbConnection;
        $this->dbHost = $dbHost;
    }
}
