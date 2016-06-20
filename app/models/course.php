<?php
/**
 * course.php creates CourseModel class and has functions of CRUD
 */
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Include Database.php
 */
require_once $_SESSION['Root'].'\core\models\database\database.php';
require_once $_SESSION['Root'].'\core\models\baseModel.php';

/**
 * CourseModel class connects with database and executes commands from functions
 */
class CourseModel extends BaseModel
{
    /**
     * Empty constructor
     */
    public function __construct() 
    {    
    }
    /**
     * Gets the course name
     * @return string
     */
    public function getCourseName() {
        return parent::getCourseName();
    }
    /**
     * Gets the course code
     * @return string
     */
    public function getCourseCode() {
        return parent::getCourseCode();
    }
    /**
     * Sets the course name
     * @param string $courseName Course Name
     */
    public function setCourseName($courseName) {
        parent::setCourseName($courseName);
    }
    /**
     * Sets the course code
     * @param string $courseCode Course code
     */
    public function setCourseCode($courseCode) {
        parent::setcourseCode($courseCode);
    }
    /**
     * Calls function of inserttable from database to create new Course
     */
    public function createCourseRow()
    {
        DBAL::inserttable("course",CourseModel::getCourseName(),CourseModel::getCourseCode(),'');
    }
    /**
     * Calls function of selecttable from database to read all courses
     * @return array Returning array of table values
     */
    public function readCourseRow()
    {
        return DBAL::selecttable("course");
    }
    /**
     * Updates the course information
     * @param string $column1 Column to be changed
     * @param string $column2 Column to be changed
     * @param mixed $newvalue New value
     * @param mixed $oldvalue Value to be replaced
     */
    public function update($column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::updatetable("course",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete the row from course table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($column,$value)
    {
        DBAL::deletetable("course",$column,$value);
    }

}

?>

