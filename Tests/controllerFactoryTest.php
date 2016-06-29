<?php
/**
 * Testing ControllerFactory
 */
require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'index.php';
use core\controllers\ControllerFactory;
/**
 * ControllerFactoryTest class has function which perform test on ControllerFactory
 */
class ControllerFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to test testContollerFactory class
     * @return array
     */
    public function providertestContollerFactory()
    {
        return array(array("course"),array("teacher"));
    }
    /**
     * ControllerFactory tested here
     * @param string $type table name passed here
     * @dataProvider providertestContollerFactory
     */
    public function testContollerFactory($type)
    {
        $obj=new ControllerFactory;
        $val=new \app\controllers\CourseController("$type");
        $this->assertEquals($val,$obj->createController($type));
    }
}

?>