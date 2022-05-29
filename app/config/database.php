<?php

define('DSN', 'mysql:dbname=common;port=3306;charset=utf8mb4;host=mysql');
define('USER', 'daiki');
define('PASS', 'daiki');

// $dsn = 'mysql:dbname=common;port=3306;charset=utf8mb4;host=mysql';
// $user = 'daiki';
// $pass = 'daiki';

try {

    $dbh = new PDO(DSN, USER, PASS);
    echo '接続成功' . PHP_EOL;
} catch (PDOException $e) {

    echo '接続失敗 : ' . $e->getMessage() . PHP_EOL;
    die();
}
