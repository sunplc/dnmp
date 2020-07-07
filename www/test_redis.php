<?php

$redis = new Redis();
$redis->connect('redis', 6379);

// String
$key = 'STRING';
$redis->incr($key);

echo "<pre>";
var_export($redis->info());
echo "</pre>";

// Hash
$redis->hMset('HASH', ['username'=> 'jack','age'=>25]);

// List
$redis->lPush('LIST', date('Ymd'));

// Set
$redis->sAdd('SET', time());

// ZSet
$redis->zAdd('ZSET', rand(1,9),  'jack');
$redis->zAdd('ZSET', rand(1,9),  'jobs');
$redis->zAdd('ZSET', rand(1,9),  'steve');
$redis->zAdd('ZSET', rand(1,9),  'patric');

