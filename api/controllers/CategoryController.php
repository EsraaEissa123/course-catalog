<?php

require_once '../models/Category.php';

class CategoryController
{
    public function getAllCategories()
    {
        $categories = Category::getAll();
        echo json_encode($categories);
    }

    public function getCategoryById($id)
    {
        $category = Category::findById($id);
        echo json_encode($category);
    }
}
