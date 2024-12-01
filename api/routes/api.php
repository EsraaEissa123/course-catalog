
<?php

require_once '../controllers/CategoryController.php';
require_once '../controllers/CourseController.php';

class Route
{
    private $uri;
    private $method;

    public function __construct($uri, $method)
    {
        $this->uri = trim($uri, '/');
        $this->method = $method;
    }

    public function resolve()
    {
        switch ($this->uri) {
            case 'categories':
                if ($this->method === 'GET') {
                    (new CategoryController())->getAllCategories();
                }
                break;
            case preg_match('/categories\/[a-zA-Z0-9-]+/', $this->uri) ? true : false:
                if ($this->method === 'GET') {
                    $id = basename($this->uri);
                    (new CategoryController())->getCategoryById($id);
                }
                break;
            case 'courses':
                if ($this->method === 'GET') {
                    (new CourseController())->getAllCourses();
                }
                break;
            default:
                http_response_code(404);
                echo json_encode(["error" => "Route not found"]);
                break;
        }
    }
}
