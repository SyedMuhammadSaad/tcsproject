<?php
/**
 * teacher.php creates TeacherModel class and has functions of CRUD
 */
//require_once Root.d_S.'core'.d_S.'models'.d_S.'baseModel.php';
require_once Root.d_S.'core'.d_S.'models'.d_S.'database'.d_S.'database.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\baseModel.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\database\database.php';

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
    public function create($column1,$value1)
    {
        DBAL::insert("teacher",$column1,$value1);
    }
    /**
     * Calls function of selecttable from database to read all teachers
     * @return array Returning array of table values
     */
    public function read()
    {
        return DBAL::select("teacher");
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
        DBAL::update("teacher",$column1,$column2,$newvalue,$oldvalue);
    }
    /**
     * Delete the row from teacher table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($column,$value)
    {
        DBAL::delete("teacher",$column,$value);
    }

}
//TeacherModel::update("Age","Name",30,"Ali Afzal");
?>
