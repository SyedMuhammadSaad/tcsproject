<?php
/**
 * TeacherController gets model accordingly and perform different functions.
 */
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including modelFactory to create model according to teacher.
 */
include_once $_SESSION['Root'].'\core\models\modelFactory.php';
include_once $_SESSION['Root'].'\core\controllers\baseController.php';
/**
 * TeacherController class has CRUD functionality.
 */
class TeacherController extends BaseController
{
    /**
     * Gets the type of model to use the parameters accordingly.
     * @var modelFactory 
     */
    private $model;
    /**
     * Set value of model
     * @param string $typeofModel
     */
    public function setModel($typeofModel)
    {
        $this->model=parent::setModel($typeofModel);
    }
    /**
     * Teacher is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $course Course Name
     * @return boolean
     */
    public function createTeacher($name,$age,$course)
    {
        if($name==NULL || $age==NULL || $course==NULL)
        {
            return false;
        }
        else
        {
            $this->model->setName("$name");
            $this->model->setAge($age);
            $this->model->setCourse("$course");
            $this->model->createTeacherRow();
            return true;
        }
    }
    /**
     * All of the teachers are shown or read from table.
     */
    public function read()
    {
        $count=$this->model->readTeacherRow();
        echo "<table><tr><th>Name</th><th>Age</th><th>Course</th></tr>";
        $size=sizeof($count);
        if($size>0)
        {
            for($i=0;$i<$size;$i++)
            {
                echo "<tr><td style='text-align:left'>".$count[$i][0]."</td><td style='text-align:center'>".$count[$i][1]."</td><td style='text-align:center'>".$count[$i][2]."</td></tr>";

            }
        }
        echo "</table>";
        if($size==0)
        {
            echo "<b>No Table to be Displayed</b>";
        }
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     * @return boolean
     */
    public function updateTeacher($column1,$column2,$newvalue,$oldvalue)//Update table set column1 = newvalue where column2 = oldvalue
    {
        return parent::update($column1, $column2, $newvalue, $oldvalue);
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    public function deleteTeacher($column, $value)
    {
        return parent::delete($column, $value);
    }
}
?>