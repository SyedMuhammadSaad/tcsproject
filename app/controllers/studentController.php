<?php
/**
 * StudentController gets model accordingly and perform different functions.
 */
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Including modelFactory to create model according to student.
 */
include_once $_SESSION['Root'].'\core\models\modelFactory.php';
include_once $_SESSION['Root'].'\core\controllers\baseController.php';
/**
 * StudentController class has CRUD functionality.
 */
class StudentController extends BaseController
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
     * Student is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $degree Degree Name
     * @return boolean
     */
    public function createstudent($name,$age,$degree)
    {
        if($name==NULL || $age==NULL || $degree==NULL)
        {
            return false;
        }
        else
        {
            $this->model->setName("$name");
            $this->model->setAge($age);
            $this->model->setDegree("$degree");
            $this->model->createStudentRow();
            return true;
        }
    }
    /**
     * All of the student are shown or read from table.
     */
    public function read()
    {
        $count=$this->model->readStudentRow();
        echo "<table><tr><th>Name</th><th>Age</th><th>Degree</th></tr>";
        $size=sizeof($count);
        if($size>0)
        {
            for($i=0;$i<$size;$i++)
            {
                echo "<tr><td style='text-align:left'>".$count[$i][0]."</td><td style='text-align:center'>".$count[$i][1]."</td><td style='text-align:left'>".$count[$i][2]."</td></tr>";

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
    public function updatestudent($column1,$column2,$newvalue,$oldvalue)//Update table set column1 = newvalue where column2 = oldvalue
    {
        return parent::update($column1, $column2, $newvalue, $oldvalue);
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    public function deletestudent($column, $value)
    {
        return parent::delete($column, $value);
    }
}

?>
