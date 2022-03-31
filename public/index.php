<?php

use Bidkar\Brawlhalla\Libs\MysqlConnection;

require __DIR__ . '/../vendor/autoload.php';

$usuario = new \Bidkar\Brawlhalla\Libs\User();

$usuario->uuid = \Ramsey\Uuid\v4();

echo $usuario->uuid;

var_dump($usuario->validateName('bidkar4jhskjd867yuweyiwe'));
$usuario->setName('bidkar3jkkhs');
echo $usuario->getName();

echo '<br>Contraseña: ';
$pwd = 'kldfRjf34lks';
var_dump($usuario->validatePassword($pwd));

echo '<br>Email: ';
$email = 'bidkar@gmail.com';
var_dump($usuario->validateEmail($email));
if ($usuario->validateEmail($email))
    echo "$email correcto";
else
    echo "$email incorrecto";

$cnn = new MysqlConnection('127.0.0.1','','','',3306);
