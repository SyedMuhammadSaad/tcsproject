<?php
/**
 * Testing ControllerFactory
 */

/**
 * Including files
 */
include_once '../public/index.php';
include_once $_SESSION['Root'].'\core\controllers\controllerFactory.php';

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
        $this->assertNotEquals("Wrong Type Selected",$obj->createController($type));
    }
}

?>