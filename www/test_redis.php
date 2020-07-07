<?php

$redis = new Redis();
$redis->pconnect('redis', 6379);

$key = 'string';
$redis->incr($key);

echo 'key : string , value: '.$redis->get($key);

