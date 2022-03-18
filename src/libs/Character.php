<?php
namespace Bidkar\Brawlhalla\Libs;

class Character
{
    public $id;
    public $name;
    public $weapons = [
        'main' => null,
        'secondary' => null
    ];
    public $weakness;
    public $strength;
}