<?php

use PHPUnit\Framework\TestCase;
use Bidkar\Brawlhalla\Libs\User;

class UserTest extends TestCase
{
    public function test_name()
    {
        $name = User::validateName('bidkar12');
        $this->assertTrue($name);

        $name = User::validateName('biDkar-787');
        $this->assertFalse($name);
    }

    // public function test_password()
    // {
    //     # ...
    // }

    // public function test_email()
    // {
    //     # ...
    // }
}