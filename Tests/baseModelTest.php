<?php
/**
 * Testing BaseModel
 */
use core\models\BaseModel;
/**
 * Testing BaseModel
 */
class BaseModelTest extends PHPUnit_Framework_TestCase
{
    /**
     * Returning array of arrays to testSelect
     * @return array
     */
    public function providertestSelect()
    {
        return array(array("teacher"),array("student"));
    }
    /**
     * Test Select of DBAL
     * @param string $modelname
     * @dataProvider providertestSelect
     */
    public function testSelect($modelname)
    {
        $obj= new BaseModel($modelname);
        $size=  $obj->read($modelname);
        $this->assertEquals($size, $obj->read($modelname));
    }
}
