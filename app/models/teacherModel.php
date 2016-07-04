<?php
/**
 * teacher.php creates TeacherModel class and has functions of CRUD
 */

namespace app\models;
use core\models\BaseModel;
/**
 * MetaTeacher included
 */

//require_once Root.d_S.'app'.d_S.'models'.d_S.'metadata'.d_S.'MetaTeacher.php';
/**
 * TeacherModel class connects with database and executes commands from functions
 */
class TeacherModel extends BaseModel
{
    /**
     * @var string Name
     */
    private $name;
    /**
     *
     * @var int Age
     */
    private $age;
    /**
     *
     * @var string Course Name
     */
    private $course;
}
?>