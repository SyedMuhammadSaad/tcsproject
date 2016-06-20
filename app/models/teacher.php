<?php
/**
 * teacher.php creates TeacherModel class and has functions of CRUD
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
 * TeacherModel class connects with database and executes commands from functions
 */
class TeacherModel extends BaseModel
{
    /**
     * Empty Constructor
     */
    public function __construct() 
    {
    }
    /**
     * Gets Name of teacher
     * @return string
     */
    public function getName() {
        return parent::getName();
    }
    /**
     * Gets Age of teacher
     * @return int
     */
    public function getAge() {
        return parent::getAge();
    }
    /**
     * Gets Course of teacher
     * @return string
     */
    public function getCourse() {
        return parent::getCourse();
    }
    /**
     * Set Name of teacher
     * @param string $name Name
     */
    public function setName($name) {
        parent::setName($name);
    }
    /**
     * Sets Age of teacher
     * @param int $age Age
     */
    public function setAge($age) {
        parent::setAge($age);
    }
    /**
     * Sets Course of teacher
     * @param string $course Course
     */
    public function setCourse($course) {
        parent::setCourse($course);
    }
    /**
     * Calls function of inserttable from database to create new teacher
     */
    public function createTeacherRow()
    {
        DBAL::inserttable("teacher",TeacherModel::getName(),TeacherModel::getAge(),TeacherModel::getCourse());
    }
    /**
     * Calls function of selecttable from database to read all teachers
     * @return array Returning array of table values
     */
    public function readTeacherRow()
    {
        return DBAL::selecttable("teacher");
    }
    /**
     * Updates the teaher information
     * @param string $column1 Column to be changed
     * @param string $column2 Column to be changed
     * @param mixed $newvalue New value
     * @param mixed $oldvalue Value to be replaced
     */
    public function update($column1,$column2,$newvalue,$oldvalue)
    {
        DBAL::updatetable("teacher",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete the row from teacher table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($column,$value)
    {
        DBAL::deletetable("teacher",$column,$value);
    }

}

?>
