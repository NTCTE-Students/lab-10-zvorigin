<?php
class DatabaseConnectionException extends Exception {}

function connectToDatabase($dsn, $username, $password) {
    try {
        // Пример попытки подключения
        new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        throw new DatabaseConnectionException("Ошибка подключения к базе данных: " . $e->getMessage());
    }
}
?>