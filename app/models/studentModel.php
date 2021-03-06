<?php
/**
 * student.php creates StudentModel class and has functions of CRUD
 */
namespace app\models;
use core\models\BaseModel;

/**
 * StudentModel class connects with database and executes commands from functions
 */
class StudentModel extends BaseModel
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
     * @var string Degree Name
     */
    private $degree;
}
?>
