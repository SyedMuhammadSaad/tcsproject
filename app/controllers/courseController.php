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
 * CourseController class has CRUD functionality.
 */
class CourseController
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
     * Course is created by putting in the information.
     * @param string $courseName Name of the course.
     * @param string $courseCode Code of the course.
     * @return boolean
     */
    public function createCourse($courseName,$courseCode)
    {
        if($courseName==NULL || $courseCode==NULL)
        {
            return false;
        }
        else
        {
            $this->model->setCourseName($courseName);
            $this->model->setCourseCode($courseCode);
            $this->model->createCourseRow();
            return true;
        }
        
    }
    /**
     * All of the courses are shown or read from table.
     */
    public function readCourse()
    {
        $count=$this->model->readCourseRow();
        echo "<table><tr><th>CourseName</th><th>CourseCode</th></tr>";
        $size=sizeof($count);
        if($size>0)
        {
            for($i=0;$i<$size;$i++)
            {
                echo "<tr><td style='text-align:left'>".$count[$i][0]."</td><td style='text-align:left'>".$count[$i][1]."</td></tr>";
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
    public function updateCourse($column1,$column2,$newvalue,$oldvalue)//Update table set column1 = newvalue where column2 = oldvalue
    {
        if($column1==NULL || $column2==NULL || $newvalue==NULL || $oldvalue==NULL)
        {
            return false;
        }
        else
        {
            $this->model->updateCourseRow($column1,$column2, $newvalue, $oldvalue);
            return true;
        }   
    }
    /**
     * Deleted the row from table.
     * @param string $column Column Name
     * @param mixed $value Value with which row to be deleted
     * @return boolean
     */
    public function deleteCourse($column, $value)
    {
        if($column==NULL || $value==NULL)
        {
            return false;
        }
        else
        {
            $this->model->deleteCourseRow($column, $value);
            return true;
        }
    }
}

?>

