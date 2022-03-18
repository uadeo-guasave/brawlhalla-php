<?php
require __DIR__ . '/../vendor/autoload.php';

$usuario = new \Bidkar\Brawlhalla\Libs\User();

$usuario->uuid = \Ramsey\Uuid\v4();

echo $usuario->uuid;