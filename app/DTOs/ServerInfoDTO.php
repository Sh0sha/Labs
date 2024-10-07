<?php
namespace App\DTOs;

class ServerInfoDTO
{
    public $phpVersion;
    public $phpInfo;

    public function __construct($phpVersion, $phpInfo)
    {
        $this->phpVersion = $phpVersion;
        $this->phpInfo = $phpInfo;
    }
}


