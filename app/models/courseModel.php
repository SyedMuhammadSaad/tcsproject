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
     *
     * @var array Array of attributes in model
     */
    private $attr;
    /**
     * Constructor setting attributes in array $attr
     */
    public function __construct() 
    {
        $this->attr=array();
        $this->attr[0]='CourseName';
        $this->attr[1]='CourseCode';
    }
    /**
     * The additional attribute if added is set by setAttr function
     * @param string $value
     */
    function setAttr($value)
    {
        $value1= ucfirst($value);
        array_push($this->attr,$value1);
    }
    /**
     * Getting the array of attributes if more attributes are added.
     * @return array
     */
    function getAttr()
    {
        return $this->attr;
    }
    /**
     * Removing element from array attr
     * @param string $value
     */
    function removeAttr($value)
    {
        for($i=0;$i<sizeof($this->attr);$i++)
        {
            if($this->attr[$i]==$value)
            {
                unset($this->attr[$i]);
                $this->attr=  array_values($this->attr);
                $i=  sizeof($this->array);
            }
        }
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
     * Calls function of create from database to create new course
     * @param string $tablename Tablename passed here
     * @param type $column1
     * @param type $value1
     */
    public function create($tablename,$column1,$value1)
    {
        parent::create($tablename,$column1, $value1);
    }
    /**
     * Calls function of selecttable from database to read all courses
     * @param string $tablename Tablename passed here
     * @return array Returning array of table values
     */
    public function read($tablename)
    {
        return parent::read($tablename);
    }
    /**
     * Updates the course information
     * @param string $tablename Tablename passed here
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
     * @param string $tablename Tablename passed here
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($tablename,$column,$value)
    {
        parent::delete($tablename,$column, $value);
    }

}

?>
