<?php

require_once '../database/DB.php';

class Category
{
    public static function getAll()
    {
        $db = DB::getConnection();
        $query = "SELECT * FROM categories";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function findById($id)
    {
        $db = DB::getConnection();
        $stmt = $db->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
