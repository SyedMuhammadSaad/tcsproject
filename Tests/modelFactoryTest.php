<?php
/**
 * Testing ModelFactory
 */

/**
 * Including files
 */
include_once '../public/index.php';
include_once $_SESSION['Root'].'\core\models\modelFactory.php';

class ModelFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to test testModelFactory class
     * @return array
     */
    public function providertestModelFactory()
    {
        return array(array("student"),array("apprentice"));
    }
    /**
     * Testing ModelFactory
     * @param string $type model Name passed here
     * @dataProvider providertestModelFactory
     */
    public function testModelFactory($type)
    {
        $obj= new ModelFactory;
        $this->assertNotEquals("Wrong model selected", $obj->createModel($type));
    }
}

?>