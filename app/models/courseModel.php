<?php
/**
 * course.php creates CourseModel class and has functions of CRUD
 */
namespace app\models;
use core\models\BaseModel;
/**
 * CourseModel class connects with database and executes commands from functions
 */
class CourseModel extends BaseModel
{
    /**
     *
     * @var string CourseName
     */
    private $courseName;
    /**
     *
     * @var string CourseCode
     */
    private $courseCode;
}
?>

