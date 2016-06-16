<?php
/**
 * student.php creates StudentModel class and has functions of CRUD
 */
if(session_status()!=PHP_SESSION_ACTIVE)
        {
            session_start();
        }

/**
 * Include Database.php
 */
require_once $_SESSION['Root'].'\core\models\database\database.php';

/**
 * StudentModel class connects with database and executes commands from functions
 */
class StudentModel
{
    /**
     * Name of student
     * @var string Name is the first column
     */
    private $name;
    /**
     * Age of student
     * @var int Age is the second column
     */
    private $age;
    /**
     * degree taken by student
     * @var string Degree is the third column
     */
    private $degree;
    /**
     * Empty Constructor
     */
    public function __construct()
    {
    }
    /**
     * Gets Name of student
     * @return string
     */
    public function getName() {
        return $this->name;
    }
    /**
     * Gets Age of student
     * @return int
     */
    public function getAge() {
        return $this->age;
    }
    /**
     * Gets Degree of student
     * @return string
     */
    public function getDegree() {
        return $this->degree;
    }
     /**
     * Set Name of student
     * @param string $name Name
     */
    public function setName($name) {
        $this->name = $name;
    }
     /**
     * Sets Age of student
     * @param int $age Age
     */
    public function setAge($age) {
        $this->age = $age;
    }
    /**
     * Sets Degree of student
     * @param string $degree Course
     */
    public function setDegree($degree) {
        $this->degree = $degree;
    }
    /**
     * Calls function of inserttable from database to create new Student
     */
    public function createStudentRow()
    {
        DBAL::inserttable("student",StudentModel::getName(),StudentModel::getAge(),StudentModel::getDegree());
    }
    /**
     * Calls function of selecttable from database to read all students
     * @return array Returning array of table values
     */
    public function readStudentRow()
    {
        return DBAL::selecttable("student");
    }
    /**
     * Updates the student information
     * @param string $column1 Column to be changed
     * @param string $column2 Column to be changed
     * @param mixed $newvalue New value
     * @param mixed $oldvalue Value to be replaced
     */
    public function updateStudentRow($column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::updatetable("student",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete the row from student table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function deleteStudentRow($column,$value)
    {
        DBAL::deletetable("student",$column,$value);
    }

}

?>