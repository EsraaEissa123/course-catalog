<?php

require_once '../models/Course.php';

class CourseController
{
    public function getAllCourses()
    {
        $courses = Course::getAll();
        echo json_encode($courses);
    }
}
