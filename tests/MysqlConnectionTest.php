<?php

use PHPUnit\Framework\TestCase;
use Bidkar\Brawlhalla\Libs\MysqlConnection;

class MysqlConnectionTest extends TestCase {
    public function test_new() {
        $cnn = new MysqlConnection();
        $this->assertInstanceOf('mysqli', $cnn->cnn);
    }
}