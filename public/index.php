<?php

require __DIR__ . '/../vendor/autoload.php';

use Bidkar\Brawlhalla\Libs\User;

echo '<pre>';
var_dump(User::login('bidkar123','1234ABcdop')); // User object
var_dump(User::login('lsdjkflksd','dlkfsjdlsk')); // false