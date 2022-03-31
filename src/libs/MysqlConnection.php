<?php

namespace Bidkar\Brawlhalla\Libs;

use \mysqli;

class MysqlConnection
{
    protected $data = [
        'host' => '127.0.0.1',
        'user' => 'root',
        'passwd' => '',
        'dbname' => 'uadeo',
        'port' => 3306
    ];
    public $cnn; # false o mysqli object

    public function __construct()
    {
        $cnn = new mysqli(
            $this->data['host'],
            $this->data['user'],
            $this->data['passwd'],
            $this->data['dbname'],
            $this->data['port']
        );
        if ($cnn->connect_error) {
            $this->cnn = false;
        }
        $this->cnn = $cnn;
    }
}
