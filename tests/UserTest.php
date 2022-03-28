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

    public function test_password()
    {
        $password = User::validatePassword('hjfye3ERi');
        $this->assertTrue($password);

        $password = User::validatePassword('');
        $this->assertFalse($password);
    }

    public function test_email()
    {
        $email = User::validateEmail('bidkar@gmail.com');
        $this->assertTrue($email);

        $email = User::validateEmail('bidkar@@gmail.com');
        $this->assertFalse($email);
    }

    public function test_new_user()
    {
        $user = User::createNewUser('','','');
        $this->assertFalse($user);

        $user = User::createNewUser('bidkar123', '1234ABcdop', 'bidkar@gmail.com');
        $this->assertInstanceOf('\Bidkar\Brawlhalla\Libs\User', $user);
    }
}