<?php

use PHPUnit\Framework\TestCase;
use Bidkar\Brawlhalla\Libs\MysqlConnection;

class MysqlConnectionTest extends TestCase {
    public function test_new() {
        $cnn = new MysqlConnection();
        $this->assertInstanceOf('Bidkar\Brawlhalla\Libs\MysqlConnection', $cnn);
    }

    public function test_connect(){
        $cnn = MysqlConnection::connectToMysql('','','','',0);
        $this->assertFalse($cnn);

        $cnn = MysqlConnection::connectToMysql('127.0.0.1','root','','uadeo',0);
        $this->assertInstanceOf('mysqli', $cnn);
    }
}