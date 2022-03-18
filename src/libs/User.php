<?php
namespace Bidkar\Brawlhalla\Libs;

class User
{
    public $id;
    public $uuid;
    public $name;
    public $password;
    public $email;
    public $created_at;
    public $status; // 1=Active 0=Inactive
}