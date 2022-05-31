<?php

use FFI\Exception;

require_once('../../config/database.php');
require_once('../../models/todo.php');

try {

    // $dbh = new PDO(DSN, USER, PASS);
    // echo '接続成功' . PHP_EOL;
    $result = Todo::getAll();

} catch (Exception $e) {

    echo '接続失敗 : ' . $e->getMessage() . PHP_EOL;
    die();
}


echo '<pre>';
var_dump($result);
echo '<pre>';
