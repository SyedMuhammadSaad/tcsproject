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
    /**
     * Empty constructor
     */
    public function __construct() 
    {    
    }
    /**
     * CourseName Setter
     * @param string $courseName
     */
    function setCourseName($courseName)
    {
        $this->courseName=$courseName;
    }
    /**
     * CourseName Getter
     * @return string
     */
    function getCourseName()
    {
        return $this->courseName;
    }
    /**
     * CourseCode Setter
     * @param string $courseCode
     */
    function setcourseCode($courseCode)
    {
        $this->courseCode=$courseCode;
    }
    /**
     * CourseCode Getter
     * @return string
     */
    function getCourseCode()
    {
        return $this->courseCode;
    }
    /**
     * Calls function of inserttable from database to create new Course
     */
    public function create($tablename,$column1,$value1)
    {
        parent::create($tablename,$column1, $value1);
    }
    /**
     * Calls function of selecttable from database to read all courses
     * @return array Returning array of table values
     */
    public function read($tablename)
    {
        return parent::read($tablename);
    }
    /**
     * Updates the course information
     * @param string $column1 Column to be changed
     * @param string $column2 Column to be changed
     * @param mixed $newvalue New value
     * @param mixed $oldvalue Value to be replaced
     */
    public function update($tablename,$column1,$column2,$newvalue,$oldvalue)
    {
        parent::update($tablename,$column1, $column2, $newvalue, $oldvalue);
    }
    /**
     * Delete the row from course table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($tablename,$column,$value)
    {
        parent::delete($tablename,$column, $value);
    }

}

?>

