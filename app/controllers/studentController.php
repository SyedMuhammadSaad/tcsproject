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

/**
 * StudentController class has CRUD functionality.
 */
class StudentController
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
        $this->model=ModelFactory::createModel($typeofModel);
    }
    /**
     * Student is created by putting in the information.
     * @param string $name Name
     * @param int $age Age
     * @param string $degree Degree Name
     */
    public function createstudent($name,$age,$degree)
    {
        $this->model->setName("$name");
        $this->model->setAge($age);
        $this->model->setDegree("$degree");
        $this->model->createStudentRow();
    }
    /**
     * All of the student are shown or read from table.
     */
    public function readstudent()
    {
        $count=$this->model->readStudentRow();
        echo "<table><tr><th>Name</th><th>Age</th><th>Degree</th></tr>";
        $size=sizeof($count);
        for($i=0;$i<$size;$i++)
        {
            echo "<tr><td style='text-align:left'>".$count[$i][0]."</td><td style='text-align:center'>".$count[$i][1]."</td><td style='text-align:left'>".$count[$i][2]."</td></tr>";
        
        }
        echo "</table>";
    }
    /**
     * Updates Table
     * @param string $column1 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param string $column2 Column name as in query Update table set column1 = newvalue where column2 = oldvalue
     * @param mixed $newvalue Value which is going to be set in place of old value
     * @param mixed $oldvalue Value to be replaced
     */
    public function updatestudent($column1,$column2,$newvalue,$oldvalue)//Update table set column1 = newvalue where column2 = oldvalue
    {
        $this->model->updateStudentRow($column1,$column2, $newvalue, $oldvalue);
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     */
    public function deletestudent($column, $value)
    {
        $this->model->deleteStudentRow($column, $value);
    }
}

?>