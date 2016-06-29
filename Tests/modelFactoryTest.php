<?php
/**
 * Testing ModelFactory
 */
//require_once dirname(dirname(__FILE__)).DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.'index.php';
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
        $val=ucfirst($type);
        $this->assertEquals($val."Model", $obj->createModel($type));
    }
}

?>