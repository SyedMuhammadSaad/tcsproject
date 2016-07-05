<?php
/**
 * Testing ModelFactory
 */
use core\models\ModelFactory;

/**
 * Testing modelFactory
 */
class ModelFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to test testModelFactory class
     * @return array
     */
    public function providertestModelFactory()
    {
        return array(array("student"),array("teacher"));
    }
    /**
     * Testing ModelFactory
     * @param string $type model Name passed here
     * @dataProvider providertestModelFactory
     */
    public function testModelFactory($type)
    {
        $obj= new ModelFactory;
        $val=new \app\models\StudentModel("$type");
        $this->assertEquals($val, $obj->createModel($type));
    }
}

?>