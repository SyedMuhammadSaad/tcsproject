<?php
/**
 * Testing studentController
 */

/**
 * Including files
 */
include_once '../public/index.php';
require_once $_SESSION['Root'].'\app\controllers\studentController.php';

/**
 * Testing studentController and crud functionalities
 */
class StudentControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of array to test testCreateStudent
     * @return array
     */
    public function providertestCreateStudent()
    {
        return array(array("Aadil",24,"MBA"),array("",24,"MBA"));
    }
    /**
     * Testing createStudent
     * @param string $name
     * @param int $age
     * @param string $degree
     * @dataProvider providertestCreateStudent
     */
    public function testCreateStudent($name, $age, $degree)
    {
        $obj=new StudentController;
        $obj->setModel("student");
        $this->assertEquals(true,$obj->createstudent($name, $age, $degree));
    }
    /**
     * Returning array of array to test testUpdateStudent
     * @return array
     */
    public function providertestUpdateStudent()
    {
        return array(array("Age","Name",40,"Aadil"),array("","Age",40,"Aadil"));
    }
    /**
     * Testing UpdateStudent
     * @param string $column1
     * @param string $column2
     * @param mixed $newvalue
     * @param mixed $oldvalue
     * @dataProvider providertestUpdateStudent
     */
    public function testUpdateStudent($column1, $column2, $newvalue, $oldvalue)
    {
        $obj=new StudentController;
        $obj->setModel("student");
        $this->assertEquals(true,$obj->updatestudent($column1, $column2, $newvalue, $oldvalue));
    }
    /**
     * Returning array of array to test testDeleteStudent
     * @return array
     */
    public function providertestDeleteStudent()
    {
        return array(array("Name",""),array("Name","Aadil"));
    }
    /**
     * Deleteing Student
     * @param string $column
     * @param mixed $value
     * @dataProvider providertestDeleteStudent
     */
    public function testDeleteStudent($column, $value)
    {
        $obj=new StudentController;
        $obj->setModel("student");
        $this->assertEquals(true,$obj->deletestudent($column, $value));
    }
}