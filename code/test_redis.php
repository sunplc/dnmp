<?php

$redis = new Redis();
$redis->pconnect('redis', 6379);

$key = 'first';
$redis->incr($key);

echo '页面浏览了：'.$redis->get($key);

