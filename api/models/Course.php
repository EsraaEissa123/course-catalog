<?php

require_once '../database/DB.php';

class Course
{
    public static function getAll()
    {
        $db = DB::getConnection();
        $query = "SELECT * FROM courses";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
