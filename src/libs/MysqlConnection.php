<?php

namespace Bidkar\Brawlhalla\Libs;

use \mysqli;

class MysqlConnection extends mysqli
{
    protected $data = [
        'host' => '127.0.0.1',
        'user' => 'root',
        'passwd' => '',
        'dbname' => 'uadeo',
        'port' => 3306
    ];

    public function __construct()
    {
        parent::__construct(
            $this->data['host'],
            $this->data['user'],
            $this->data['passwd'],
            $this->data['dbname'],
            $this->data['port']
        );
    }
}
