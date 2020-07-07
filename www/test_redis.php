<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$redis->del(['STRING', 'HASH', 'LIST', 'SET', 'ZSET']);

// String
$key = 'STRING';
$redis->incr($key);

// Hash
$redis->hMset('HASH', ['username'=> 'jack','age'=>25]);

// List
$i = 10;
while ($i-- > 0) {
    $redis->lPush('LIST', $i . '-' . rand(1, 10000));
}

// Set
$i = 10;
while ($i-- > 0) {
    $redis->sAdd('SET', rand(1, 10000));
}

// ZSet
$redis->zAdd('ZSET', rand(0, 100),  'jack');
$redis->zAdd('ZSET', rand(0, 100),  'jobs');
$redis->zAdd('ZSET', rand(0, 100),  'steve');
$redis->zAdd('ZSET', rand(0, 100),  'patric');

echo 'set redis OK';
