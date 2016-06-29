<?php
/**
 * Testing ControllerFactory
 */
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'index.php';
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
        return array(array("course"),array("teacher"),array("professor"));
    }
    /**
     * ControllerFactory tested here
     * @param string $type table name passed here
     * @dataProvider providertestContollerFactory
     */
    public function testContollerFactory($type)
    {
        $obj=new ControllerFactory;
        $val=ucfirst($type);
        $this->assertEquals($val."Controller",$obj->createController($type));
    }
}

?>