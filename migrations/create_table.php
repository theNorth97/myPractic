<?php

if (!file_exists(__DIR__ . '/config/database.php')) {
    die('Config file not found!');
}

require_once __DIR__ . '/config/database.php';


try {
    $dbh = getDbConnection();
    $dbh->exec("CREATE TABLE users (
            id SERIAL PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");
    header('Location: success.php');
    exit;
} catch (PDOException $e) {
    if ($e->getCode() == '42P07') {
        echo " Таблица с таким именем уже существует";
    } else {
        echo " Ошибка: " . $e->getMessage();
    }
}
