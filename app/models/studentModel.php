<?php
/**
 * student.php creates StudentModel class and has functions of CRUD
 */
namespace app\models;
use core\models\BaseModel;
use core\models\database\DBAL;
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
     * @var string Course Name
     */
    private $degree;
    /**
     * Empty Constructor
     */
    public function __construct() 
    {
    }
    /**
     * Name Setter
     * @param string $name
     */
    function setName($name)
    {
        $this->name=$name;
    }
    /**
     * Name Getter
     * @return string
     */
    function getName()
    {
        return $this->name;
    }
    /**
     * Age Setter
     * @param int $age
     */
    function setAge($age)
    {
         $this->age=$age;
    }
    /**
     * Age Getter
     * @return int
     */
    function getAge()
    {
        return $this->age;
    }
    /**
     * Degree Setter
     * @param string $degree
     */
    function setDegree($degree)
    {
        $this->degree=$degree;
    }
    /**
     * Degree Getter
     * @return string
     */
    function getDegree()
    {
        return $this->degree;
    }
    /**
     * Calls function of inserttable from database to create new Student
     */
    public function create($column1,$value1)
    {
        DBAL::insert("student",$column1,$value1);
    }
    /**
     * Calls function of selecttable from database to read all students
     * @return array Returning array of table values
     */
    public function read()
    {
        return DBAL::select("student");
    }
    /**
     * Updates the student information
     * @param string $column1 Column to be changed
     * @param string $column2 Column to be changed
     * @param mixed $newvalue New value
     * @param mixed $oldvalue Value to be replaced
     */
    public function update($column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::update("student",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete the row from student table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($column,$value)
    {
        DBAL::delete("student",$column,$value);
    }

}

?>
