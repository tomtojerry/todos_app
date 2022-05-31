<?php
require_once('../../config/database.php');

class Todo {

    public static function getAll() {
        $dbh = new PDO(DSN, USER, PASS);
        $sql = 'select * from todos';
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
