<?php

function getDbConnection()
{
    static $dbh = null;

    if ($dbh === null) {
        try {
            $dbh = new PDO(
                "pgsql:host=127.0.0.1;port=5432;dbname=php_learning;",
                "postgres",
                "dbpwd",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            "db error " . $e->getMessage();
        }
    }
    return $dbh;
}
