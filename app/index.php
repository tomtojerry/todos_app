<?php

require_once('config/database.php');

$sql = 'select * from todos';
$stmt = $dbh->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($result);
echo '<pre>';
