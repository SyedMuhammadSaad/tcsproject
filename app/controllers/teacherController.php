<?php
/**
 * TeacherController gets model accordingly and perform different functions.
 */

/**
 * Including modelFactory to create model according to teacher.
 */
include_once '../../core/models/modelFactory.php';

/**
 * TeacherController class has CRUD functionality.
 */
class TeacherController
{
    /**
     * Gets the type of model to use the parameters accordingly.
     * @var modelFactory 
     */
    private $model;
    /**
     * Value of model is set in constructor
     * @param string $typeofModel
     */
    public function __construct($typeofModel)
    {
        $this->model=ModelFactory::createModel($typeofModel);
    }
    /**
     * Teacher is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $course Course Name
     */
    public function createTeacher($name,$age,$course)
    {
        $this->model->setName("$name");
        $this->model->setAge($age);
        $this->model->setCourse("$course");
        $this->model->createTeacherRow();
    }
    /**
     * All of the teachers are shown or read from table.
     */
    public function readTeacher()
    {
        $this->model->readTeacherRow();
    }
    /**
     * 
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     */
    public function updateTeacher($column1,$column2,$newvalue,$oldvalue)//Update table set column1 = newvalue where column2 = oldvalue
    {
        $this->model->updateTeacherRow($column1,$column2, $newvalue, $oldvalue);
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     */
    public function deleteTeacher($column, $value)
    {
        $this->model->deleteTeacherRow($column, $value);
    }
}
//$obj=new TeacherController("teacher");
//$obj->updateTeacher("Name","Age","Shafiq ur Rehman",29);
//$obj->deleteTeacher("Name", "Shafiq ur Rehman");
//$obj->readTeacher();
?>