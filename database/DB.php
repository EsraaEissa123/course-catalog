<?php

class DB
{
    private static $instance = null;

    public static function getConnection()
    {
        if (!self::$instance) {
            try {
                self::$instance = new PDO(
                    'mysql:host=db;dbname=course_catalog;charset=utf8mb4',
                    'test_user',
                    'test_password',
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
