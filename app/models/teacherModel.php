<?php
/**
 * teacher.php creates TeacherModel class and has functions of CRUD
 */
namespace app\models;
use core\models\BaseModel;
//require_once Root.d_S.'core'.d_S.'models'.d_S.'baseModel.php';
//require_once Root.d_S.'core'.d_S.'models'.d_S.'database'.d_S.'database.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\baseModel.php';
//require_once 'C:\xampp\htdocs\TCS_Project\core\models\database\database.php';

/**
 * TeacherModel class connects with database and executes commands from functions
 */
class TeacherModel extends BaseModel
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
    private $course;
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
     * Course Setter
     * @param string $course
     */
    function setCourse($course)
    {
        $this->course=$course;
    }
    /**
     * Course Getter
     * @return string
     */
    function getCourse()
    {
        return $this->course;
    }
    /**
     * Calls function of inserttable from database to create new teacher
     */
    public function create($tablename,$column1,$value1)
    {
        parent::create($tablename,$column1, $value1);
    }
    /**
     * Calls function of selecttable from database to read all teachers
     * @return array Returning array of table values
     */
    public function read($tablename)
    {
       return parent::read($tablename);
    }
    /**
     * Updates the teaher information
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
     * Delete the row from teacher table
     * @param string $column Column of the table with which value is to be deleted
     * @param mixed $value Value with which to be deleted
     */
    public function delete($tablename,$column,$value)
    {
        parent::delete($tablename,$column, $value);
    }

}
//TeacherModel::update("Age","Name",30,"Ali Afzal");
?>
