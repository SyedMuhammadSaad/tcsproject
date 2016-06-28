<?php
/**
 * student.php creates StudentModel class and has functions of CRUD
 */
namespace app\models;
use core\models\BaseModel;

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
     * @var string Degree Name
     */
    private $degree;
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
        $this->attr[0]='Name';
        $this->attr[1]='Age';
        $this->attr[2]='Degree';
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
     * Calls function of create from database to create new student
     * @param string $tablename Tablename passed here
     * @param type $column1
     * @param type $value1
     */
    public function create($tablename,$column1,$value1)
    {
        parent::create($tablename,$column1, $value1);
    }
    /**
     * Calls function of selecttable from database to read all students
     * @param string $tablename Tablename passed here
     * @return array Returning array of table values
     */
    public function read($tablename)
    {
        return parent::read($tablename);
    }
    /**
     * Updates the student information
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
     * Delete the row from student table
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
